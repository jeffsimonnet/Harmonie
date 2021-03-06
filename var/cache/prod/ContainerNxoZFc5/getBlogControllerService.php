<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Document\BlogController' shared autowired service.
     *
     * @return \App\Controller\Document\BlogController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Document\\BlogController'] = $instance = new \App\Controller\Document\BlogController(($container->services['doctrine_mongodb.odm.default_document_manager'] ?? $container->load('getDoctrineMongodb_Odm_DefaultDocumentManagerService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\Document\\BlogController', $container));

        return $instance;
    }
}
