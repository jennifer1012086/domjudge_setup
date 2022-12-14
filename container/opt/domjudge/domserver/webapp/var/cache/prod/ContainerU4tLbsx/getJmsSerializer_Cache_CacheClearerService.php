<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Cache_CacheClearerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'jms_serializer.cache.cache_clearer' shared service.
     *
     * @return \JMS\SerializerBundle\Cache\CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer-bundle/Cache/CacheClearer.php';

        return $container->privates['jms_serializer.cache.cache_clearer'] = new \JMS\SerializerBundle\Cache\CacheClearer(($container->privates['jms_serializer.metadata.traceable_cache'] ?? $container->load('getJmsSerializer_Metadata_TraceableCacheService')));
    }
}
