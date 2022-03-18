<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Rememberme_Services_Simplehash_AdminService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.rememberme.services.simplehash.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authentication.rememberme.services.simplehash.admin'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.user.provider.concrete.app_admin_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppAdminProviderService'));
        }, 1), $container->getEnv('APP_SECRET'), 'admin', ['path' => '/admin', 'name' => 'REMEMBERME', 'lifetime' => 31536000, 'domain' => NULL, 'secure' => NULL, 'httponly' => true, 'samesite' => NULL, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'], ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')));
    }
}