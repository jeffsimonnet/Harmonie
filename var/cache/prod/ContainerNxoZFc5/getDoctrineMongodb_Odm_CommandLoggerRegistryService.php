<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMongodb_Odm_CommandLoggerRegistryService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine_mongodb.odm.command_logger_registry' shared service.
     *
     * @return \Doctrine\Bundle\MongoDBBundle\APM\CommandLoggerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['doctrine_mongodb.odm.command_logger_registry'] = new \Doctrine\Bundle\MongoDBBundle\APM\CommandLoggerRegistry(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}
