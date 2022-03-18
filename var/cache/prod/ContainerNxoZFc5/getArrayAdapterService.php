<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArrayAdapterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Omines\DataTablesBundle\Adapter\ArrayAdapter' autowired service.
     *
     * @return \Omines\DataTablesBundle\Adapter\ArrayAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['Omines\\DataTablesBundle\\Adapter\\ArrayAdapter'] = function () use ($container) {
            return new \Omines\DataTablesBundle\Adapter\ArrayAdapter();
        };

        return $container->factories['service_container']['Omines\\DataTablesBundle\\Adapter\\ArrayAdapter']();
    }
}
