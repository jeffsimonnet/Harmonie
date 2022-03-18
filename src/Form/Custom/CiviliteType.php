<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CiviliteType extends AbstractType
{
    public static $choices = [
        'Mme' => 'Mme',
        'M.' => 'M.',
    ];

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => array_flip(self::$choices),
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}