<?php

namespace App\Form\Custom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StaticPortletsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        foreach($options['config'] as $key) {
            $config = explode('_', $key);
            $type = $config[0];
            switch($type) {
                case 'hero' : 
                    $builder->add($key, StaticHeroType::class, ['type' => $config[1], 'subtype' => @$config[2]]);
                    break;
                case 'promise' : 
                    $builder->add($key, StaticPromiseType::class);
                    break;
                case 'produits' : 
                    $builder->add($key, StaticProduitsType::class);
                    break;
                case 'features' : 
                    $builder->add($key, StaticFeaturesType::class);
                    break;
                case 'comparatif' : 
                    $builder->add($key, StaticComparatifType::class);
                    break;
                case 'texte' : 
                    $builder->add($key, StaticTexteType::class);
                    break;
                case 'paves' : 
                    $builder->add($key, StaticPavesType::class);
                    break;
            }
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'config' => [],
            'required' => false,
        ]);
    }
}
