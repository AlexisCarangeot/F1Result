<?php

namespace ContainerIleJ2Pf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V_BWcwRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v.bWcwR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v.bWcwR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pilote' => ['privates', '.errored..service_locator.v.bWcwR.App\\Entity\\Pilote', NULL, 'Cannot autowire service ".service_locator.v.bWcwR": it references class "App\\Entity\\Pilote" but no such service exists.'],
        ], [
            'pilote' => 'App\\Entity\\Pilote',
        ]);
    }
}
