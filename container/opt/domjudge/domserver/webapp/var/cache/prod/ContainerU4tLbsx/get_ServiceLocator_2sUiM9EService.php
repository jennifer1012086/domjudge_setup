<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2sUiM9EService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.2sUiM9E' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2sUiM9E'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'form' => ['privates', '.errored..service_locator.2sUiM9E.Symfony\\Component\\Form\\FormInterface', NULL, 'Cannot autowire service ".service_locator.2sUiM9E": it references interface "Symfony\\Component\\Form\\FormInterface" but no such service exists. Did you create a class that implements this interface?'],
            'user' => ['privates', '.errored..service_locator.2sUiM9E.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.2sUiM9E": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'form' => 'Symfony\\Component\\Form\\FormInterface',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
