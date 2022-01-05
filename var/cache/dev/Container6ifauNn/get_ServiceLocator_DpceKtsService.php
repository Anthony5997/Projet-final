<?php

namespace Container6ifauNn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DpceKtsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DpceKts' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DpceKts'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bookingRepository' => ['privates', 'App\\Repository\\BookingRepository', 'getBookingRepositoryService', true],
            'trip' => ['privates', '.errored..service_locator.DpceKts.App\\Entity\\Trip', NULL, 'Cannot autowire service ".service_locator.DpceKts": it references class "App\\Entity\\Trip" but no such service exists.'],
        ], [
            'bookingRepository' => 'App\\Repository\\BookingRepository',
            'trip' => 'App\\Entity\\Trip',
        ]);
    }
}