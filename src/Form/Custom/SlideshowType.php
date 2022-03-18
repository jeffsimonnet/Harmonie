<?php

namespace App\Form\Custom;

use FM\ElfinderBundle\Form\Type\ElFinderType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SlideshowType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $separateur = '|';
        $builder
            ->addModelTransformer(new CallbackTransformer(
                function ($tagsAsArray) use ($separateur) {
                    if(!empty($tagsAsArray)) return implode($separateur, $tagsAsArray);
                    else return "";
                },
                function ($tagsAsString) use ($separateur) {
                    return array_map('trim', explode($separateur, $tagsAsString));
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'block_prefix' => 'elfinder_slideshow',
        ]);
    }

    public function getParent()
    {
        return ElFinderType::class;
    }
}
