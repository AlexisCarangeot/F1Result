<?php

namespace ContainerIleJ2Pf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_98tDWxnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.98tDWxn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.98tDWxn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'circuit' => ['privates', '.errored..service_locator.98tDWxn.App\\Entity\\Circuit', NULL, 'Cannot autowire service ".service_locator.98tDWxn": it references class "App\\Entity\\Circuit" but no such service exists.'],
        ], [
            'circuit' => 'App\\Entity\\Circuit',
        ]);
    }
}
