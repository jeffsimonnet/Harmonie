<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVideoCacheManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\VideoCacheManager' shared autowired service.
     *
     * @return \App\Service\VideoCacheManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\VideoCacheManager'] = new \App\Service\VideoCacheManager(($container->services['cache.app'] ?? $container->load('getCache_AppService')));
    }
}
