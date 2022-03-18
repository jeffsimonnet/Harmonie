<?php

namespace App\Form\Custom;

use App\Document\Zone;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ZoneSelectType extends AbstractSelect2Type
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'class' => Zone::class,
            'label' => 'Zone',
            'choice_label' => 'fullName',
            'choice_value' => 'id',
            'placeholder' => null,
            'choices' => [],
            'route' => '_zone_ajax_list' 
        ]);
    }
}
