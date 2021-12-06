<?php

namespace ContainerAjDXuFp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UQ292Y5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UQ292Y5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UQ292Y5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bookingRepository' => ['privates', 'App\\Repository\\BookingRepository', 'getBookingRepositoryService', true],
            'trip' => ['privates', '.errored..service_locator.UQ292Y5.App\\Entity\\Trip', NULL, 'Cannot autowire service ".service_locator.UQ292Y5": it references class "App\\Entity\\Trip" but no such service exists.'],
            'tripRepository' => ['privates', 'App\\Repository\\TripRepository', 'getTripRepositoryService', true],
        ], [
            'bookingRepository' => 'App\\Repository\\BookingRepository',
            'trip' => 'App\\Entity\\Trip',
            'tripRepository' => 'App\\Repository\\TripRepository',
        ]);
    }
}
