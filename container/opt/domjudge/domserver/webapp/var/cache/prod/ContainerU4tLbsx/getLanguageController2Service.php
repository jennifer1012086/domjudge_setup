<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLanguageController2Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Jury\LanguageController' shared autowired service.
     *
     * @return \App\Controller\Jury\LanguageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Jury/LanguageController.php';

        $container->services['App\\Controller\\Jury\\LanguageController'] = $instance = new \App\Controller\Jury\LanguageController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')));

        $instance->setContainer(($container->privates['.service_locator.Qhw4Z9B'] ?? $container->load('get_ServiceLocator_Qhw4Z9BService'))->withContext('App\\Controller\\Jury\\LanguageController', $container));

        return $instance;
    }
}
