<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GDIbSTService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.GDIb_sT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GDIb_sT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jid' => ['privates', '.errored..service_locator.GDIb_sT.App\\Entity\\Judging', NULL, 'Cannot autowire service ".service_locator.GDIb_sT": it references class "App\\Entity\\Judging" but no such service exists.'],
        ], [
            'jid' => 'App\\Entity\\Judging',
        ]);
    }
}
