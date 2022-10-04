<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportProblemServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\ImportProblemService' shared autowired service.
     *
     * @return \App\Service\ImportProblemService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ImportProblemService.php';

        return $container->privates['App\\Service\\ImportProblemService'] = new \App\Service\ImportProblemService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')), ($container->privates['App\\Service\\SubmissionService'] ?? $container->load('getSubmissionServiceService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')));
    }
}
