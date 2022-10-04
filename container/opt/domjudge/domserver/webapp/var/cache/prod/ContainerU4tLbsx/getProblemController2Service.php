<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProblemController2Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Jury\ProblemController' shared autowired service.
     *
     * @return \App\Controller\Jury\ProblemController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Jury/ProblemController.php';

        $container->services['App\\Controller\\Jury\\ProblemController'] = $instance = new \App\Controller\Jury\ProblemController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')), ($container->privates['App\\Service\\SubmissionService'] ?? $container->load('getSubmissionServiceService')), ($container->privates['App\\Service\\ImportProblemService'] ?? $container->load('getImportProblemServiceService')));

        $instance->setContainer(($container->privates['.service_locator.Qhw4Z9B'] ?? $container->load('get_ServiceLocator_Qhw4Z9BService'))->withContext('App\\Controller\\Jury\\ProblemController', $container));

        return $instance;
    }
}
