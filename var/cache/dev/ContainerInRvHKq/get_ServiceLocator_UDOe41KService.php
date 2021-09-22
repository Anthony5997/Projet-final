<?php

namespace ContainerInRvHKq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UDOe41KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UDOe41K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UDOe41K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'travelPreferencesController' => ['services', 'App\\Controller\\TravelPreferencesController', 'getTravelPreferencesControllerService', true],
            'travelPreferencesRepository' => ['privates', 'App\\Repository\\TravelPreferencesRepository', 'getTravelPreferencesRepositoryService', true],
            'tripRepository' => ['privates', 'App\\Repository\\TripRepository', 'getTripRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.UDOe41K.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.UDOe41K": it references class "App\\Entity\\User" but no such service exists.'],
            'vehiculeController' => ['services', 'App\\Controller\\VehiculeController', 'getVehiculeControllerService', true],
            'vehiculeRepository' => ['privates', 'App\\Repository\\VehiculeRepository', 'getVehiculeRepositoryService', true],
        ], [
            'passwordEncoder' => '?',
            'slugger' => '?',
            'travelPreferencesController' => 'App\\Controller\\TravelPreferencesController',
            'travelPreferencesRepository' => 'App\\Repository\\TravelPreferencesRepository',
            'tripRepository' => 'App\\Repository\\TripRepository',
            'user' => 'App\\Entity\\User',
            'vehiculeController' => 'App\\Controller\\VehiculeController',
            'vehiculeRepository' => 'App\\Repository\\VehiculeRepository',
        ]);
    }
}
