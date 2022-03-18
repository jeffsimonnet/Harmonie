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

class RealisationController extends AbstractBaseController {
    #region Admin

    /**
     * @Route("/admin/realisation/", name="admin_realisation_index")
     */
    public function indexRealisations(Request $request, DataTableFactory $dataTableFactory, DocumentManager $documentManager): Response {
        $table = $dataTableFactory->create(["pageLength" => 100])
            ->add('select', TextColumn::class, ['label' => '', 'raw' => true, 'orderable' => false, 'render' => ''])
            ->add('titre', TextColumn::class, ['label' => 'Titre', 'render' => function ($value, $context) {
                    return $context['title'];
                }])
            ->add('slug', TextColumn::class, ['label' => 'Chemin'])
            ->add('categorie', TextColumn::class, ['label' => 'Catégorie', 'render' => function ($value, $context) {
                    return $context['content']['categorie'];
                }])
            ->add('featured', TextColumn::class, ['label' => 'A la une', 'render' => function ($value, $context) {
                    $text = '';
                    if (@$context['content']['featured'])
                        $text .= "A la une /";
                    if (@$context['content']['featured_home'])
                        $text .= "A la une home /";
                    return trim($text, '/');
                }])
            ->add('lieu', TextColumn::class, ['label' => 'Lieu', 'render' => function ($value, $context) use ($documentManager) {
                    $page = $documentManager->getRepository(Page::class)->find($context["_id"]); // TODO $context is an array and not a document. How to avoid this additional query?
                    $zone = $page->getZone();
                    return !empty($zone) ? $zone->getFullName() : "----";
                }])
            ->add('status', TextColumn::class, ['label' => 'Statut'])
            ->add('_id', TextColumn::class, ['label' => '', 'orderable' => false, 'globalSearchable' => false, 'render' => function ($value, $context) {
                    return sprintf('<a data-id="%s" href="%s">&#9998;</a>', $value, $this->generateUrl('admin_realisation_edit', ['page' => $value]));
                }])
            ->createAdapter(MongoDBAdapterCustom::class, [
                'collection' => $documentManager->getDocumentCollection(Page::class),
                'filters' => [
                    '$and' => [
                        ['type' => 'realisation'],
                        ['status' => ['$ne' => 'archive']]
                    ]
                ]
            ])
            ->handleRequest($request);

        if ($table->isCallback()) {
            return $table->getResponse();
        }
        return $this->render('admin/realisation_index.html.twig', [
                'datatable' => $table,
        ]);
    }

    /**
     * @Route("/admin/realisation/new", name="admin_realisation_new")
     */
    public function new(Request $request): Response {
        $type = 'realisation';

        $page = new Page();
        $form = $this->createForm(PageType::class, $page, ['prefix' => '/', 'type' => $type]);
        $form->add('save', SubmitType::class, ['label' => 'Enregistrer']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->dmPersistFlush($page);

            $this->addFlash('success', 'La réalisation a été créée !');
            return $this->redirectToRoute('admin_realisation_edit', ['page' => $page->getId()]);
        }

        return $this->render('admin/realisation_edit.html.twig', [
                'page' => $page,
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/realisation/{page}/edit", name="admin_realisation_edit")
     */
    public function edit(Request $request, PageCacheManager $cache, string $page): Response {
        $page = $this->dmFindDocument(Page::class, $page);
        $currentSlug = $page->getSlug();
        $form = $this->createForm(PageType::class, $page, ["prefix" => '/', 'type' => $page->getType()]);
        $form->add('save', SubmitType::class, ['label' => 'Enregistrer']);
        $this->addDeleteButton($form, 'admin_realisation_delete', $page->getId());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cache->resetPage($currentSlug);
            $this->dmFlush($page);

            $this->addFlash('success', 'La réalisation a été enregistrée !');
            return $this->redirectToRoute('admin_realisation_edit', ['page' => $page->getId()]);
        }

        return $this->render('admin/realisation_edit.html.twig', [
                'page' => $page,
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/realisation/{page}/preview", name="admin_realisation_preview")
     */
    public function preview(PageCacheManager $pageCacheManager, Request $request, string $page): Response {
        // no caching here
        $page = $this->dmFindDocument(Page::class, $page);
        $content = $pageCacheManager->renderPage($page);

        return $content;
    }

    /**
     * @Route("/admin/realisation/{page}", name="admin_realisation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, string $page): Response {
        $page = $this->dmFindDocument(Page::class, $page);
        if ($this->isCsrfTokenValid('delete' . $page->getId(), $request->request->get('_token'))) {
            $this->dmRemoveFlush($page);

            $this->addFlash('success', "La réalisation a été supprimée !");
        }

        return $this->redirectToRoute('admin_realisation_index');
    }

    #endregion
}
