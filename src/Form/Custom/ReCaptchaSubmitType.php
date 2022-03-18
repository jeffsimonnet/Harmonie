<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReCaptchaSubmitType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'block_prefix' => 'recaptcha_button'
        ]);
    }

    public function getParent()
    {
        // NOTE This shows as a button, but the real widget is a hidden input
        return HiddenType::class;
    }
}
