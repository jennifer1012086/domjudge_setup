<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeamTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\TeamType' shared autowired service.
     *
     * @return \App\Form\Type\TeamType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/AbstractExternalIdEntityType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/TeamType.php';

        return $container->privates['App\\Form\\Type\\TeamType'] = new \App\Form\Type\TeamType(($container->privates['App\\Service\\EventLogService'] ?? $container->load('getEventLogServiceService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()));
    }
}
