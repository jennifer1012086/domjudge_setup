<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XXVN9EdService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.XXVN9Ed' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XXVN9Ed'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'problem' => ['privates', '.errored..service_locator.XXVN9Ed.App\\Entity\\Problem', NULL, 'Cannot autowire service ".service_locator.XXVN9Ed": it references class "App\\Entity\\Problem" but no such service exists.'],
        ], [
            'problem' => 'App\\Entity\\Problem',
        ]);
    }
}