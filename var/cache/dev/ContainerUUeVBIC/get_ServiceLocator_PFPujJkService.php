<?php

namespace ContainerUUeVBIC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PFPujJkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PFPujJk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PFPujJk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tripRepository' => ['privates', 'App\\Repository\\TripRepository', 'getTripRepositoryService', true],
        ], [
            'tripRepository' => 'App\\Repository\\TripRepository',
        ]);
    }
}
