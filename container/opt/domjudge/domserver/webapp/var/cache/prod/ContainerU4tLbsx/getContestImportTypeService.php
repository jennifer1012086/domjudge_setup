<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContestImportTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\ContestImportType' shared autowired service.
     *
     * @return \App\Form\Type\ContestImportType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/ContestImportType.php';

        return $container->privates['App\\Form\\Type\\ContestImportType'] = new \App\Form\Type\ContestImportType();
    }
}
