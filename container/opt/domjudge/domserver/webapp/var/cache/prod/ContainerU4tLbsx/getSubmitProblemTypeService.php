<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSubmitProblemTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\SubmitProblemType' shared autowired service.
     *
     * @return \App\Form\Type\SubmitProblemType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/SubmitProblemType.php';

        return $container->privates['App\\Form\\Type\\SubmitProblemType'] = new \App\Form\Type\SubmitProblemType(($container->privates['App\\Service\\DOMJudgeService'] ?? $container->getDOMJudgeServiceService()), ($container->services['App\\Service\\ConfigurationService'] ?? $container->getConfigurationServiceService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
