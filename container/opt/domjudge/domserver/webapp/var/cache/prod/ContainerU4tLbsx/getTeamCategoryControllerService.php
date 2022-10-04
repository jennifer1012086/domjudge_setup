<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeamCategoryControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Jury\TeamCategoryController' shared autowired service.
     *
     * @return \App\Controller\Jury\TeamCategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Jury/TeamCategoryController.php';

        $container->services['App\\Controller\\Jury\\TeamCategoryController'] = $instance = new \App\Controller\Jury\TeamCategoryController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')));

        $instance->setContainer(($container->privates['.service_locator.Qhw4Z9B'] ?? $container->load('get_ServiceLocator_Qhw4Z9BService'))->withContext('App\\Controller\\Jury\\TeamCategoryController', $container));

        return $instance;
    }
}
