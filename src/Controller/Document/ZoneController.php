<?php

namespace App\Controller\Document;

use App\Controller\AbstractBaseController;
use App\Document\Zone;
use App\Form\ZoneType;
use Doctrine\ODM\MongoDB\DocumentManager;
use App\Extension\MongoDBAdapterCustom;
use Omines\DataTablesBundle\Column\TextColumn;
use Omines\DataTablesBundle\DataTableFactory;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZoneController extends AbstractBaseController {
    #region Admin

    /**
     * @Route("/admin/zone/", name="admin_zone_index")
     */
    public function index(Request $request, DataTableFactory $dataTableFactory, DocumentManager $documentManager): Response {
        $table = $dataTableFactory->create(["pageLength" => 100])
            ->add('select', TextColumn::class, ['label' => '', 'raw' => true, 'orderable' => false, 'render' => ''])
            ->add('nom', TextColumn::class, ['label' => 'Nom', 'render' => function ($value, $context) use ($documentManager) {
                    $zone = $documentManager->getRepository(Zone::class)->find($context["_id"]); // TODO $context is an array and not a document. How to avoid this additional query?
                    return !empty($zone) ? $zone->getFullName() : "----";
                }])
            ->add('code', TextColumn::class, ['label' => 'Code'])
            ->add('_id', TextColumn::class, ['label' => '', 'orderable' => false, 'globalSearchable' => false, 'render' => function ($value, $context) {
                    return sprintf('<a data-id="%s" href="%s">&#9998;</a>', $value, $this->generateUrl('admin_zone_edit', ['zone' => $value]));
                }])
            ->createAdapter(MongoDBAdapterCustom::class, [
                'collection' => $documentManager->getDocumentCollection(Zone::class),
            ])
            ->handleRequest($request);

        if ($table->isCallback()) {
            return $table->getResponse();
        }
        return $this->render('admin/zone_index.html.twig', [
                'datatable' => $table,
        ]);
    }

    /**
     * @Route("/admin/zone/new", name="admin_zone_new")
     */
    public function newZone(Request $request): Response {
        $zone = new Zone();
        if (!empty($parent)) {
            $parent = $this->dmFindDocument(Zone::class, $parent);
            $zone->setParent($parent);
        }
        $form = $this->createForm(ZoneType::class, $zone);
        $form->add('save', SubmitType::class, ['label' => 'Enregistrer']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->dmPersistFlush($zone);

            $this->addFlash('success', 'La zone a été créée !');
            return $this->redirectToRoute('admin_zone_edit', ['zone' => $zone->getId()]);
        }

        return $this->render('admin/zone_edit.html.twig', [
                'zone' => $zone,
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/zone/{zone}/edit", name="admin_zone_edit")
     */
    public function edit(Request $request, string $zone): Response {
        $zone = $this->dmFindDocument(Zone::class, $zone);
        $form = $this->createForm(ZoneType::class, $zone);
        $form->add('save', SubmitType::class, ['label' => 'Enregistrer']);
        $this->addDeleteButton($form, 'admin_zone_delete', $zone->getId());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->dmFlush($zone);

            $this->addFlash('success', 'La zone a été enregistrée !');
            return $this->redirectToRoute('admin_zone_edit', ['zone' => $zone->getId()]);
        }

        return $this->render('admin/zone_edit.html.twig', [
                'zone' => $zone,
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/zone/{zone}", name="admin_zone_delete", methods={"DELETE"})
     */
    public function delete(Request $request, string $zone): Response {
        $zone = $this->dmFindDocument(Zone::class, $zone);
        if ($this->isCsrfTokenValid('delete' . $zone->getId(), $request->request->get('_token'))) {
            $this->dmRemoveFlush($zone);

            $this->addFlash('success', "La zone a été supprimée !");
        }

        return $this->redirectToRoute('admin_zone_index');
    }

    #endregion

    /**
     * @Route("/_ajax/zone-select", name="_zone_ajax_list", methods={"GET"}, defaults={"id": "id"})
     * @Route("/_ajax/zone-select/code", name="_zone_ajax_list_code", methods={"GET"}, defaults={"id": "code"})
     */
    public function selectZone(Request $request, $id): Response {
        $text = $request->query->get("term");
        if (empty($text))
            return $this->json([]);

        $repo = $this->dmGetRepo(Zone::class);
        $qb = $repo->createQueryBuilder("z")
            ->field('nom')->equals(new \MongoDB\BSON\Regex($text, 'i'))
            ->limit(20);

        $items = $qb
            ->getQuery()
            ->execute();

        return $this->select2($items, $id, 'fullName');
    }

}
