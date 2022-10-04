<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuditLogControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Jury\AuditLogController' shared autowired service.
     *
     * @return \App\Controller\Jury\AuditLogController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Jury/AuditLogController.php';

        $container->services['App\\Controller\\Jury\\AuditLogController'] = $instance = new \App\Controller\Jury\AuditLogController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')));

        $instance->setContainer(($container->privates['.service_locator.Qhw4Z9B'] ?? $container->load('get_ServiceLocator_Qhw4Z9BService'))->withContext('App\\Controller\\Jury\\AuditLogController', $container));

        return $instance;
    }
}