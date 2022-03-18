<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z4iM9NRService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Z4iM9NR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z4iM9NR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'page' => ['privates', 'App\\Document\\Page', 'getPageService', true],
            'videoCacheManager' => ['privates', 'App\\Service\\VideoCacheManager', 'getVideoCacheManagerService', true],
        ], [
            'page' => 'App\\Document\\Page',
            'videoCacheManager' => 'App\\Service\\VideoCacheManager',
        ]);
    }
}