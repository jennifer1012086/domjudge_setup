<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContestProblemVisitorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Serializer\ContestProblemVisitor' shared autowired service.
     *
     * @return \App\Serializer\ContestProblemVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Serializer/ContestProblemVisitor.php';

        return $container->privates['App\\Serializer\\ContestProblemVisitor'] = new \App\Serializer\ContestProblemVisitor();
    }
}