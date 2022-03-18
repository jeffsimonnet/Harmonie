<?php

namespace App\Form\Custom;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class StaticComparatifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextareaType::class)
            ->add('titre_avantages', TextareaType::class)
            ->add('texte_avantages', CKEditorType::class, [
                'config' => [
                    'bodyClass' => 'content',
                ]
            ])
            ->add('titre_contraintes', TextareaType::class)
            ->add('texte_contraintes', CKEditorType::class, [
                'config' => [
                    'bodyClass' => 'content',
                ]
            ])
        ;
    }
}
