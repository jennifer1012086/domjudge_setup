<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoadGatlingDataCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'console.command.public_alias.App\Command\LoadGatlingDataCommand' shared autowired service.
     *
     * @return \App\Command\LoadGatlingDataCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/LoadGatlingDataCommand.php';

        return $container->services['console.command.public_alias.App\\Command\\LoadGatlingDataCommand'] = new \App\Command\LoadGatlingDataCommand();
    }
}
