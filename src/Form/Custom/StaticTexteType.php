<?php

namespace App\Form\Custom;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class StaticTexteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextareaType::class)
            ->add('accroche', CKEditorType::class, [
                'label' => 'Texte',
                'config' => [
                    'bodyClass' => 'content',
                ]
            ])
            ->add('texte', CKEditorType::class, [
                'label' => 'Suite',
                'config' => [
                    'bodyClass' => 'content',
                ]
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Standard' => 'simple',
                    'Full page' => 'full',
                    'Deux colonnes' => 'double',
                ]
            ])
        ;
    }
}
