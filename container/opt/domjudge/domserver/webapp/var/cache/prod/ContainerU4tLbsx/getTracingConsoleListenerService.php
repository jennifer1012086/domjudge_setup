<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTracingConsoleListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Sentry\SentryBundle\EventListener\TracingConsoleListener' shared service.
     *
     * @return \Sentry\SentryBundle\EventListener\TracingConsoleListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/sentry/sentry-symfony/src/EventListener/TracingConsoleListener.php';

        return $container->privates['Sentry\\SentryBundle\\EventListener\\TracingConsoleListener'] = new \Sentry\SentryBundle\EventListener\TracingConsoleListener(($container->privates['Sentry\\State\\HubInterface'] ?? $container->getHubInterfaceService()), [0 => 'messenger:consume']);
    }
}
