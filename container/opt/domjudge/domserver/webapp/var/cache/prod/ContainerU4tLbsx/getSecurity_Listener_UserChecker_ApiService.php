<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_UserChecker_ApiService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.user_checker.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserCheckerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-http/EventListener/UserCheckerListener.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Security/UserChecker.php';

        return $container->privates['security.listener.user_checker.api'] = new \Symfony\Component\Security\Http\EventListener\UserCheckerListener(($container->privates['App\\Security\\UserChecker'] ?? ($container->privates['App\\Security\\UserChecker'] = new \App\Security\UserChecker())));
    }
}
