<?php

namespace App\Form\Custom;

use FM\ElfinderBundle\Form\Type\ElFinderType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StaticHeroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', HiddenType::class, ['data' => $options['type']])
            ->add('contenu', CKEditorType::class, [
                'label' => 'Texte',
                'required' => false,
                'config' => [
                    'bodyClass' => 'hero',
                ]
            ])
            ->add('cta_link', null, ['label' => 'Lien CTA', 'required' => false])
            ->add('cta_label', null, ['label' => 'Texte CTA', 'required' => false])
        ;
        if ($options['subtype'] == 'video') {
            $builder->add('video', TextareaType::class);
        }
        if ($options['subtype'] == 'image') {
            $builder->add('image', ElFinderType::class, [
                'instance' => 'form',
                'enable' => true,
            ]);
        }
        if ($options['type'] == 'split') {
            $builder->add('icons', TextareaType::class, ['block_prefix' => 'icons_input']);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'prefix' => '',
            'type' => 'split',
            'subtype' => false,
        ]);
    }
}
