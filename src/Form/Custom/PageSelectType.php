<?php

namespace App\Form\Custom;

use App\Document\Page;
use Doctrine\Bundle\MongoDBBundle\Form\Type\DocumentType;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageSelectType extends AbstractType
{
    private $documentManager;

    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $choices = $this->getChoices();

        $hasHome = false;
        foreach ($choices as $page) {
            if ($page->getParent() == null) $hasHome = true;
        }

        $d = [
            'label' => 'Page',
            'class' => Page::class,
            'choice_label' => 'slug',
            'choice_value' => 'id',
            'choices' => $choices,
        ];

        if (!$hasHome) {
            $d['placeholder'] = 'Aucune';
            $d['empty_data'] = null;
        } else {
            $d['placeholder'] = false;
        }

        $resolver->setDefaults($d);
    }

    public function getParent()
    {
        return DocumentType::class;
    }

    public function getChoices()
    {
        return $this->documentManager->createQueryBuilder(Page::class)
            ->field('level')->lte(2)
            ->field('type')->in(['contenu', 'statique', 'template', 'home'])
            ->getQuery()->execute();
    }
}
