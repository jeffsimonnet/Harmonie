<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Document\Page' shared autowired service.
     *
     * @return \App\Document\Page
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Document\\Page'] = new \App\Document\Page();
    }
}
