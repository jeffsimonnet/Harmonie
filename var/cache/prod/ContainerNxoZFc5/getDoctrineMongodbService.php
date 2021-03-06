<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodbService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine_mongodb' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\ManagerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['doctrine_mongodb'] = new \Doctrine\Bundle\MongoDBBundle\ManagerRegistry('MongoDB', $container->parameters['doctrine_mongodb.odm.connections'], $container->parameters['doctrine_mongodb.odm.document_managers'], 'default', 'default', 'ProxyManager\\Proxy\\GhostObjectInterface', $container);
    }
}
