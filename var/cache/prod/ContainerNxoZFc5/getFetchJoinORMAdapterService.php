<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFetchJoinORMAdapterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Omines\DataTablesBundle\Adapter\Doctrine\FetchJoinORMAdapter' autowired service.
     *
     * @return \Omines\DataTablesBundle\Adapter\Doctrine\FetchJoinORMAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->factories['service_container']['Omines\\DataTablesBundle\\Adapter\\Doctrine\\FetchJoinORMAdapter'] = function () use ($container) {
            return new \Omines\DataTablesBundle\Adapter\Doctrine\FetchJoinORMAdapter(NULL);
        };

        return $container->factories['service_container']['Omines\\DataTablesBundle\\Adapter\\Doctrine\\FetchJoinORMAdapter']();
    }
}
