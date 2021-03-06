<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMongoDBAdapterCustomService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Extension\MongoDBAdapterCustom' autowired service.
     *
     * @return \App\Extension\MongoDBAdapterCustom
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['App\\Extension\\MongoDBAdapterCustom'] = function () use ($container) {
            return new \App\Extension\MongoDBAdapterCustom();
        };

        return $container->factories['service_container']['App\\Extension\\MongoDBAdapterCustom']();
    }
}
