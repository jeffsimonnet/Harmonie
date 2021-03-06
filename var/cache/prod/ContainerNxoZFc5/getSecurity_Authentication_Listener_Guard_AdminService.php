<?php

namespace ContainerNxoZFc5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Guard_AdminService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authentication.listener.guard.admin' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), []);
        $a->setSessionAuthenticationStrategy(($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));

        $container->privates['security.authentication.listener.guard.admin'] = $instance = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()), 'admin', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Security\\AdminAuthenticator'] ?? $container->load('getAdminAuthenticatorService'));
        }, 1), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')));

        $instance->setRememberMeServices(($container->privates['security.authentication.rememberme.services.simplehash.admin'] ?? $container->load('getSecurity_Authentication_Rememberme_Services_Simplehash_AdminService')));

        return $instance;
    }
}
