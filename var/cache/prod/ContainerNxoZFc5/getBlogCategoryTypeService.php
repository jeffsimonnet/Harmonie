<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogCategoryTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Custom\BlogCategoryType' shared autowired service.
     *
     * @return \App\Form\Custom\BlogCategoryType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Custom\\BlogCategoryType'] = new \App\Form\Custom\BlogCategoryType();
    }
}