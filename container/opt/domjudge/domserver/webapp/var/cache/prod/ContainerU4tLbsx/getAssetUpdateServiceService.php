<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetUpdateServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\AssetUpdateService' shared autowired service.
     *
     * @return \App\Service\AssetUpdateService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/AssetUpdateService.php';

        return $container->privates['App\\Service\\AssetUpdateService'] = new \App\Service\AssetUpdateService(($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')));
    }
}
