<?php

namespace ContainerU4tLbsx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Value_URn8ZdService extends App_KernelProdContainer
{
    /*
     * Gets the private '.value._URn8Zd' shared service.
     *
     * @return \mixed
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.value._URn8Zd'] = \current([0 => (\dirname(__DIR__, 3).'/log')]);
    }
}
