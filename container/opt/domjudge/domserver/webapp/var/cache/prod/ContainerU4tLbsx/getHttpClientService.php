<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttpClientService extends App_KernelProdContainer
{
    /*
     * Gets the private 'http_client' shared service.
     *
     * @return \Symfony\Contracts\HttpClient\HttpClientInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-client-contracts/HttpClientInterface.php';
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-client/HttpClient.php';

        $container->privates['http_client'] = $instance = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $a = new \Symfony\Bridge\Monolog\Logger('http_client');
        $a->pushProcessor(($container->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($container->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $a->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));

        $instance->setLogger($a);

        return $instance;
    }
}
