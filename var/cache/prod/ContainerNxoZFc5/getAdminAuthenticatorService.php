<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminAuthenticatorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Security\AdminAuthenticator' shared autowired service.
     *
     * @return \App\Security\AdminAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Security\\AdminAuthenticator'] = new \App\Security\AdminAuthenticator(($container->services['router'] ?? $container->getRouterService()), ($container->services['security.csrf.token_manager'] ?? $container->load('getSecurity_Csrf_TokenManagerService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
