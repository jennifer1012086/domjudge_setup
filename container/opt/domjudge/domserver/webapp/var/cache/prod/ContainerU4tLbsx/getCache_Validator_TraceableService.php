<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_Validator_TraceableService extends App_KernelProdContainer
{
    /*
     * Gets the private 'cache.validator.traceable' shared service.
     *
     * @return \Sentry\SentryBundle\Tracing\Cache\TraceableCacheAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['cache.validator.traceable'] = new \Sentry\SentryBundle\Tracing\Cache\TraceableCacheAdapter(($container->privates['Sentry\\State\\HubInterface'] ?? $container->getHubInterfaceService()), \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('31zqj7wjkZ', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools/system'), ($container->privates['monolog.logger.cache'] ?? $container->getMonolog_Logger_CacheService())));
    }
}