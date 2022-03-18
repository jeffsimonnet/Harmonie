<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageMetaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', null, ['label' => 'Meta-title'])
            ->add('description', TextareaType::class, ['label' => 'Meta-description'])
            ->add('robots', ChoiceType::class, [
                'label' => 'Robots',
                'choices' => [
                    'index,follow' => 'index,follow',
                    'noindex,follow' => 'noindex,follow',
                    'index,nofollow' => 'index,nofollow',
                    'noindex,nofollow' => 'noindex,nofollow',
                ]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'prefix' => '',
        ]);
    }
}
