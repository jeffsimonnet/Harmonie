<?php

namespace App\Form\Custom;

use FM\ElfinderBundle\Form\Type\ElFinderType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageHeroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'expanded' => true,
                'placeholder' => 'Aucun',
                'choices' => [
                    'Image seulement' => 'small',
                    'Texte sur image' => 'wide',
                    'Texte sur le coté' => 'split',
                ],
                'required' => false])
            // ->add('image', ChoiceType::class, [
            //     'label' => 'Image',
            //     'expanded' => true,
            //     'placeholder' => 'Aucun',
            //     'choices' => [
            //         'Image 1' => 'build/images/bando_1.jpg',
            //         'Image 2' => 'build/images/bando_2.jpg',
            //         'Image 3' => 'build/images/bando_3.jpg',
            //         'Image 4' => 'build/images/bando_4.jpg',
            //         'Image 5' => 'build/images/bando_5.jpg',
            //         'Image 6' => 'build/images/bando_6.jpg',
            //         'Image 7' => 'build/images/bando_7.jpg',
            //         'Image 8' => 'build/images/bando_8.jpg',
            //     ],
            //     'required' => false])
            ->add('image', ElFinderType::class, [
                'instance' => 'form',
                'enable' => true,
                'required' => false,
            ])
            ->add('contenu', CKEditorType::class, [
                'label' => 'Texte',
                'required' => false,
                'config' => [
                    'bodyClass' => 'hero',
                ]])
            ->add('cta_link', null, ['label' => 'Lien CTA', 'required' => false])
            ->add('cta_label', null, ['label' => 'Texte CTA', 'required' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'prefix' => '',
        ]);
    }
}
