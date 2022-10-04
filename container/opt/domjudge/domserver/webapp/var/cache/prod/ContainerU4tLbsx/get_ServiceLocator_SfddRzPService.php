<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SfddRzPService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.SfddRzP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SfddRzP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'importExport' => ['privates', 'App\\Service\\ImportExportService', 'getImportExportServiceService', true],
        ], [
            'importExport' => 'App\\Service\\ImportExportService',
        ]);
    }
}
