<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagsListeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->addModelTransformer(new CallbackTransformer(
                function ($tagsAsArray) use ($options) {
                    if(!empty($tagsAsArray)) return implode($options['separateur'], $tagsAsArray);
                    else return "";
                },
                function ($tagsAsString) use ($options) {
                    return array_map('trim', explode($options['separateur'], $tagsAsString));
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'separateur' => ',',
        ]);
    }

    public function getParent()
    {
        return TextType::class;
    }
}
