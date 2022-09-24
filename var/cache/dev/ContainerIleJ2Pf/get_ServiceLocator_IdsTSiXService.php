<?php

namespace ContainerIleJ2Pf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IdsTSiXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IdsTSiX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IdsTSiX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'piloteRepository' => ['privates', 'App\\Repository\\PiloteRepository', 'getPiloteRepositoryService', true],
            'teamRepository' => ['privates', 'App\\Repository\\TeamRepository', 'getTeamRepositoryService', true],
        ], [
            'piloteRepository' => 'App\\Repository\\PiloteRepository',
            'teamRepository' => 'App\\Repository\\TeamRepository',
        ]);
    }
}
