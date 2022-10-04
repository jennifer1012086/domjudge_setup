<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContestVisitorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Serializer\ContestVisitor' shared autowired service.
     *
     * @return \App\Serializer\ContestVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Serializer/ContestVisitor.php';

        return $container->privates['App\\Serializer\\ContestVisitor'] = new \App\Serializer\ContestVisitor(($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')));
    }
}