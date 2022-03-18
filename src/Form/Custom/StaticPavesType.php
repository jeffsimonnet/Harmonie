<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class StaticPavesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('pave1', StaticPaveType::class, ['block_prefix' => 'pave'])
            ->add('pave2', StaticPaveType::class, ['block_prefix' => 'pave'])
            ->add('pave3', StaticPaveType::class, ['block_prefix' => 'pave'])
            ->add('pave4', StaticPaveType::class, ['block_prefix' => 'pave'])
        ;
    }
}
