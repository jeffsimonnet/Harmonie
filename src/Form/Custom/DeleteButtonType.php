<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeleteButtonType extends AbstractType
{

    // Don't forget to declare for them in config/twig.yml
    // form_themes:
    //     - '_entity/_widgets.html.twig'

    public function configureOptions(OptionsResolver $resolver)
    {
        // this defines the available options and their default values when
        // they are not configured explicitly when using the form type
        $resolver->setDefaults([
            'active' => true,
            'info_inactive' => "Action impossible !",
            'mapped' => false,
            'action' => null,
            'csrf' => false,
            'label' => 'Supprimer',
            'confirm' => 'Etes-vous sûr de vouloir effacer ces données ?',
        ]);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars = array_replace($view->vars, $options);
    }
}
