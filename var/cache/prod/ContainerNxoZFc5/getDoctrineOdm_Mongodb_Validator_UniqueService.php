<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineOdm_Mongodb_Validator_UniqueService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine_odm.mongodb.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine_odm.mongodb.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($container->services['doctrine_mongodb'] ?? $container->load('getDoctrineMongodbService')));
    }
}
