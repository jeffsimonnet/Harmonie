<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageTypeSelectTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Custom\PageTypeSelectType' shared autowired service.
     *
     * @return \App\Form\Custom\PageTypeSelectType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Custom\\PageTypeSelectType'] = new \App\Form\Custom\PageTypeSelectType();
    }
}
