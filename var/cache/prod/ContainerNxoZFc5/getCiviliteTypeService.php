<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCiviliteTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Custom\CiviliteType' shared autowired service.
     *
     * @return \App\Form\Custom\CiviliteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Custom\\CiviliteType'] = new \App\Form\Custom\CiviliteType();
    }
}
