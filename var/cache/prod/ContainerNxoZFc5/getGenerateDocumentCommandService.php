<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGenerateDocumentCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.App\Command\GenerateDocumentCommand' shared autowired service.
     *
     * @return \App\Command\GenerateDocumentCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command.public_alias.App\\Command\\GenerateDocumentCommand'] = new \App\Command\GenerateDocumentCommand();
    }
}
