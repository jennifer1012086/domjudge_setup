<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScoreboardServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\ScoreboardService' shared autowired service.
     *
     * @return \App\Service\ScoreboardService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/ScoreboardService.php';

        return $container->privates['App\\Service\\ScoreboardService'] = new \App\Service\ScoreboardService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')));
    }
}
