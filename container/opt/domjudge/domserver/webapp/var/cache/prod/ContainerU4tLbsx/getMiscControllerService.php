<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMiscControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Team\MiscController' shared autowired service.
     *
     * @return \App\Controller\Team\MiscController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Team/MiscController.php';

        $container->services['App\\Controller\\Team\\MiscController'] = $instance = new \App\Controller\Team\MiscController(($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\ScoreboardService'] ?? $container->load('getScoreboardServiceService')), ($container->privates['App\\Service\\SubmissionService'] ?? $container->load('getSubmissionServiceService')));

        $instance->setContainer(($container->privates['.service_locator.Qhw4Z9B'] ?? $container->load('get_ServiceLocator_Qhw4Z9BService'))->withContext('App\\Controller\\Team\\MiscController', $container));

        return $instance;
    }
}
