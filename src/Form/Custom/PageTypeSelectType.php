<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageTypeSelectType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label' => 'Type de page', 
            'choices' => [
                'Page de contenu' => 'contenu',
                'Statique' => 'statique',
                'Template' => 'template',
                'Home' => 'home',
            ]
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}