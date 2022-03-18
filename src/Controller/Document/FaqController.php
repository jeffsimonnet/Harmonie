<?php

namespace App\Controller\Document;

use App\Controller\AbstractBaseController;
use App\Document\Page;
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

class FaqController extends AbstractBaseController {
    #region Admin

    /**
     * @Route("/admin/faq/", name="admin_faq_index")
     */
    public function index(Request $request, DataTableFactory $dataTableFactory, DocumentManager $documentManager): Response {
        $table = $dataTableFactory->create(["pageLength" => 100])
            ->add('select', TextColumn::class, ['label' => '', 'raw' => true, 'orderable' => false, 'render' => ''])
            ->add('title', TextColumn::class, ['label' => 'Titre'])
            ->add('slug', TextColumn::class, ['label' => 'Chemin'])
            ->add('status', TextColumn::class, ['label' => 'Statut'])
            ->add('_id', TextColumn::class, ['label' => '', 'orderable' => false, 'globalSearchable' => false, 'render' => function ($value, $context) {
                    return sprintf('<a data-id="%s" href="%s">&#9998;</a>', $value, $this->generateUrl('admin_faq_edit', ['page' => $value]));
                }])
            ->createAdapter(MongoDBAdapterCustom::class, [
                'collection' => $documentManager->getDocumentCollection(Page::class),
                'filters' => [
                    '$and' => [
                        ['type' => 'faq'],
                        ['status' => ['$ne' => 'archive']]
                    ]
                ]
            ])
            ->handleRequest($request);

        if ($table->isCallback()) {
            return $table->getResponse();
        }
        return $this->render('admin/faq_index.html.twig', [
                'datatable' => $table,
        ]);
    }

    /**
     * @Route("/admin/faq/new", name="admin_faq_new")
     */
    public function new(Request $request): Response {
        $page = new Page();
        $prefix = '/'; // TODO set by category
        $form = $this->createForm(PageType::class, $page, ['prefix' => $prefix, 'type' => 'faq']);
        $form->add('save', SubmitType::class, ['label' => 'Enregistrer']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->dmPersistFlush($page);

            $this->addFlash('success', "L'article a été créé !");
            return $this->redirectToRoute('admin_faq_edit', ['page' => $page->getId()]);
        }

        return $this->render('admin/faq_edit.html.twig', [
                'page' => $page,
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/faq/{page}/edit", name="admin_faq_edit")
     */
    public function edit(Request $request, PageCacheManager $cache, string $page): Response {
        $page = $this->dmFindDocument(Page::class, $page);
        $currentSlug = $page->getSlug();
        $prefix = '/'; // TODO set by category
        $form = $this->createForm(PageType::class, $page, ["prefix" => $prefix, 'type' => $page->getType()]);
        $form->add('save', SubmitType::class, ['label' => 'Enregistrer']);
        $this->addDeleteButton($form, 'admin_faq_delete', $page->getId());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cache->resetPage($currentSlug);
            $this->dmFlush($page);

            $this->addFlash('success', "L'article a été enregistré !");
            return $this->redirectToRoute('admin_faq_edit', ['page' => $page->getId()]);
        }

        return $this->render('admin/faq_edit.html.twig', [
                'page' => $page,
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/faq/{page}", name="admin_faq_delete", methods={"DELETE"})
     */
    public function delete(Request $request, string $page): Response {
        $page = $this->dmFindDocument(Page::class, $page);
        if ($this->isCsrfTokenValid('delete' . $page->getId(), $request->request->get('_token'))) {
            $this->dmRemoveFlush($page);

            $this->addFlash('success', "L'article a été supprimé !");
        }

        return $this->redirectToRoute('admin_faq_index');
    }

    #endregion
}
