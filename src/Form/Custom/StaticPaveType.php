<?php

namespace App\Form\Custom;

use FM\ElfinderBundle\Form\Type\ElFinderType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class StaticPaveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('image', ElFinderType::class, [
                'instance' => 'form',
                'enable' => true,
                'required' => false,
            ])
            ->add('accroche', CKEditorType::class, [
                'config' => [
                    'bodyClass' => 'content',
                ]
            ])
            ->add('cta_link', null, ['label' => 'Lien CTA', 'required' => false])
            ->add('cta_label', null, ['label' => 'Texte CTA', 'required' => false])
        ;
    }
}
