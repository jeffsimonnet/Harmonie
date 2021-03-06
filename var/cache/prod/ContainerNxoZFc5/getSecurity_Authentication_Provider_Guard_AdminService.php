<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Guard_AdminService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.provider.guard.admin' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authentication.provider.guard.admin'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Security\\AdminAuthenticator'] ?? $container->load('getAdminAuthenticatorService'));
        }, 1), ($container->privates['security.user.provider.concrete.app_admin_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppAdminProviderService')), 'admin', ($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')));
    }
}
