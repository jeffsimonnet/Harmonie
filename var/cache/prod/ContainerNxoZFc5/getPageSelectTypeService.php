<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageSelectTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Custom\PageSelectType' shared autowired service.
     *
     * @return \App\Form\Custom\PageSelectType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Custom\\PageSelectType'] = new \App\Form\Custom\PageSelectType(($container->services['doctrine_mongodb.odm.default_document_manager'] ?? $container->load('getDoctrineMongodb_Odm_DefaultDocumentManagerService')));
    }
}
