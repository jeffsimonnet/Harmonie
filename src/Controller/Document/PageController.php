<?php

namespace App\Controller\Document;

use App\Controller\AbstractBaseController;
use App\Document\Page;
use App\Form\Custom\PageSelectType;
use App\Form\Custom\PageTypeSelectType;
use App\Form\PageType;
use App\Service\PageCacheManager;
use Doctrine\ODM\MongoDB\DocumentManager;
use App\Extension\MongoDBAdapterCustom;
use Omines\DataTablesBundle\Column\TextColumn;
use Omines\DataTablesBundle\DataTableFactory;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractBaseController {
    #region Admin

    /**
     * @Route("/admin/page/", name="admin_page_index")
     */
    public function index(Request $request, DataTableFactory $dataTableFactory, DocumentManager $documentManager): Response {
        $table = $dataTableFactory->create(["pageLength" => 100])
            ->add('select', TextColumn::class, ['label' => '', 'raw' => true, 'orderable' => false, 'render' => ''])
            ->add('title', TextColumn::class, ['label' => 'Titre'])
            ->add('type', TextColumn::class, ['label' => 'Type'])
            ->add('slug', TextColumn::class, ['label' => 'Chemin'])
            ->add('status', TextColumn::class, ['label' => 'Statut'])
            ->add('_id', TextColumn::class, ['label' => '', 'orderable' => false, 'globalSearchable' => false, 'render' => function ($value, $context) {
                    return sprintf('<a data-id="%s" href="%s">&#9998;</a>', $value, $this->generateUrl('admin_page_edit', ['page' => $value]));
                }])
            ->createAdapter(MongoDBAdapterCustom::class, [
                'collection' => $documentManager->getDocumentCollection(Page::class),
                'filters' => [
                    '$and' => [
                        ['type' => ['$in' => ['contenu', 'statique', 'template', 'home']]],
                        ['status' => ['$ne' => 'archive']]
                    ]
                ]
            ])
            ->handleRequest($request);

        if ($table->isCallback()) {
            return $table->getResponse();
        }
        return $this->render('admin/page_index.html.twig', [
                'datatable' => $table,
        ]);
    }

    /**
     * @Route("/admin/page/action/{action}", name="_admin_page_ajax_action", methods={"POST"})
     */
    public function actions(Request $request, string $action): Response {
        $ids = $request->request->get("ids");
        if (empty($ids))
            return $this->json(['status' => 'nok']);
        switch ($action) {
            case "brouillon":
            case "publie":
            case "relecture":
            case "archive":
                $this->changeStatutPage($ids, $action);
                break;
            default:
                return $this->json(['status' => 'nok']);
        }
        return $this->json(['status' => 'ok']);
    }

    protected function changeStatutPage($ids, $statut) {
        $list = $this->dm->createQueryBuilder(Page::class)
                ->field('_id')->in($ids)
                ->getQuery()->execute();
        foreach ($list as $item)
            $item->setStatus($statut);
        $this->dm->flush();
    }

    /**
     * @Route("/admin/page/new", name="admin_page_new")
     */
    public function newChoixParent(Request $request): Response {
        $form = $this->createFormBuilder(null)->getForm();
        $form->add('page', PageSelectType::class, ['label' => 'Page parente', 'required' => false]);
        $form->add('type', PageTypeSelectType::class, ['label' => 'Type de page', 'required' => true]);
        $form->add('choose', SubmitType::class, ['label' => 'Choisir']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $this->emPersistFlush($page);

            $page = $form->get('page')->getData();
            $type = $form->get('type')->getData();
            $id = empty($page) ? '' : $page->getId();
            return $this->redirectToRoute('admin_page_new_type', ['parent' => $id, 'type' => $type]);
        }

        return $this->render('admin/page_create_select.html.twig', [
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/page/{type}/new", name="admin_page_new_type")
     */
    public function newPageType(Request $request, string $type): Response {
        $parent = $request->query->get('parent');

        $page = new Page();
        $prefix = '/';
        if (!empty($parent)) {
            $parent = $this->dmFindDocument(Page::class, $parent);
            $page->setParent($parent);
            $prefix = $parent->getSlug();
        }
        $form = $this->createForm(PageType::class, $page, ['prefix' => $prefix, 'type' => $type]);
        if (empty($parent)) {
            $page->setSlug('/');
            $form->remove('slug');
        }
        $form->add('save', SubmitType::class, ['label' => 'Enregistrer']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->dmPersistFlush($page);

            $this->addFlash('success', 'La page a été créée !');
            return $this->redirectToRoute('admin_page_edit', ['page' => $page->getId()]);
        }

        return $this->render('admin/page_edit.html.twig', [
                'page' => $page,
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/page/{page}/edit", name="admin_page_edit")
     * @Route("/admin/page/{page}/edit", name="admin_home_edit") // Alias for the ?edit shortcut in PagesController
     * @Route("/admin/page/{page}/edit", name="admin_contenu_edit") // Alias for the ?edit shortcut in PagesController
     * @Route("/admin/page/{page}/edit", name="admin_template_edit") // Alias for the ?edit shortcut in PagesController
     */
    public function edit(Request $request, PageCacheManager $cache, string $page): Response {
        $page = $this->dmFindDocument(Page::class, $page);
        $currentSlug = $page->getSlug();
        if (!empty($page->getParent()))
            $parentSlug = $page->getParent()->getSlug();
        $form = $this->createForm(PageType::class, $page, ["prefix" => $parentSlug ?? '', 'type' => $page->getType()]);
        $form->add('save', SubmitType::class, ['label' => 'Enregistrer']);
        $this->addDeleteButton($form, 'admin_page_delete', $page->getId());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cache->resetPage($currentSlug);
            $this->dmFlush($page);

            $this->addFlash('success', 'La page a été enregistrée !');
            return $this->redirectToRoute('admin_page_edit', ['page' => $page->getId()]);
        }

        return $this->render('admin/page_edit.html.twig', [
                'page' => $page,
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/page/{page}/preview", name="admin_page_preview")
     */
    public function preview(PageCacheManager $pageCacheManager, Request $request, string $page): Response {
        // no caching here
        $page = $this->dmFindDocument(Page::class, $page);
        $content = $pageCacheManager->renderPage($page);

        return $content;
    }

    /**
     * @Route("/admin/page/{page}", name="admin_page_delete", methods={"DELETE"})
     */
    public function delete(Request $request, string $page): Response {
        $page = $this->dmFindDocument(Page::class, $page);
        if ($this->isCsrfTokenValid('delete' . $page->getId(), $request->request->get('_token'))) {
            $this->dmRemoveFlush($page);

            $this->addFlash('success', "La page a été supprimée !");
        }

        return $this->redirectToRoute('admin_page_index');
    }

    #endregion
}
