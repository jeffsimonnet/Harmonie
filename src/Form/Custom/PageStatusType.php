<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageStatusType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label' => 'Statut',
            'choices' => [
                'Brouillon' => 'brouillon',
                'Relecture' => 'relecture',
                'Publié' => 'publie',
                'Archivé' => 'archive',
            ]
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
