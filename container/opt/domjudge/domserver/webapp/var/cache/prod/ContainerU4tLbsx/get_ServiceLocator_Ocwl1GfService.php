<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ocwl1GfService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ocwl1Gf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ocwl1Gf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'submission' => ['privates', '.errored..service_locator.ocwl1Gf.App\\Entity\\Submission', NULL, 'Cannot autowire service ".service_locator.ocwl1Gf": it references class "App\\Entity\\Submission" but no such service exists.'],
        ], [
            'submission' => 'App\\Entity\\Submission',
        ]);
    }
}
