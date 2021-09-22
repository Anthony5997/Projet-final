<?php

namespace ContainerUUeVBIC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NdWfgukService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ndWfguk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ndWfguk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trip' => ['privates', '.errored..service_locator.ndWfguk.App\\Entity\\Trip', NULL, 'Cannot autowire service ".service_locator.ndWfguk": it references class "App\\Entity\\Trip" but no such service exists.'],
        ], [
            'trip' => 'App\\Entity\\Trip',
        ]);
    }
}
