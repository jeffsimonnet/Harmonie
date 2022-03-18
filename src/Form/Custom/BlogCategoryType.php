<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogCategoryType extends AbstractType
{
    public static $categories = [
        'isolation' => 'Isolation thermique',
        'etancheite' => 'Étanchéité',
        'ravalement' => 'Ravalement',
        'copropriete' => 'Copropriété',
        'evenement' => 'Evènement',
    ];

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'label' => 'Catégorie',
            'choices' => array_flip(self::$categories)
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
