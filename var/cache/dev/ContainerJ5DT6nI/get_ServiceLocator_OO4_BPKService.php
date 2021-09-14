<?php

namespace ContainerJ5DT6nI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OO4_BPKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oO4.BPK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oO4.BPK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthenticatorController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.rmBpKAE', 'get_ServiceLocator_RmBpKAEService', true],
            'App\\Controller\\TravelPreferencesController::delete' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController::edit' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController::index' => ['privates', '.service_locator.Q9j70tw', 'get_ServiceLocator_Q9j70twService', true],
            'App\\Controller\\TravelPreferencesController::show' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TripController::delete' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController::edit' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController::index' => ['privates', '.service_locator.PFPujJk', 'get_ServiceLocator_PFPujJkService', true],
            'App\\Controller\\TripController::show' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TypeOfVehiculeController::delete' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\TypeOfVehiculeController::edit' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\TypeOfVehiculeController::index' => ['privates', '.service_locator.6rc6rfL', 'get_ServiceLocator_6rc6rfLService', true],
            'App\\Controller\\TypeOfVehiculeController::show' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.5YGgH5O', 'get_ServiceLocator_5YGgH5OService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\VehiculeController::delete' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Controller\\VehiculeController::edit' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Controller\\VehiculeController::index' => ['privates', '.service_locator.4SqQ2.V', 'get_ServiceLocator_4SqQ2_VService', true],
            'App\\Controller\\VehiculeController::show' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AuthenticatorController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.rmBpKAE', 'get_ServiceLocator_RmBpKAEService', true],
            'App\\Controller\\TravelPreferencesController:delete' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController:edit' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TravelPreferencesController:index' => ['privates', '.service_locator.Q9j70tw', 'get_ServiceLocator_Q9j70twService', true],
            'App\\Controller\\TravelPreferencesController:show' => ['privates', '.service_locator.JUZyQIf', 'get_ServiceLocator_JUZyQIfService', true],
            'App\\Controller\\TripController:delete' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController:edit' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TripController:index' => ['privates', '.service_locator.PFPujJk', 'get_ServiceLocator_PFPujJkService', true],
            'App\\Controller\\TripController:show' => ['privates', '.service_locator.ndWfguk', 'get_ServiceLocator_NdWfgukService', true],
            'App\\Controller\\TypeOfVehiculeController:delete' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\TypeOfVehiculeController:edit' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\TypeOfVehiculeController:index' => ['privates', '.service_locator.6rc6rfL', 'get_ServiceLocator_6rc6rfLService', true],
            'App\\Controller\\TypeOfVehiculeController:show' => ['privates', '.service_locator.W8c9CE7', 'get_ServiceLocator_W8c9CE7Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.5YGgH5O', 'get_ServiceLocator_5YGgH5OService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\VehiculeController:delete' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Controller\\VehiculeController:edit' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'App\\Controller\\VehiculeController:index' => ['privates', '.service_locator.4SqQ2.V', 'get_ServiceLocator_4SqQ2_VService', true],
            'App\\Controller\\VehiculeController:show' => ['privates', '.service_locator.0J1782j', 'get_ServiceLocator_0J1782jService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AuthenticatorController::login' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\TravelPreferencesController::delete' => '?',
            'App\\Controller\\TravelPreferencesController::edit' => '?',
            'App\\Controller\\TravelPreferencesController::index' => '?',
            'App\\Controller\\TravelPreferencesController::show' => '?',
            'App\\Controller\\TripController::delete' => '?',
            'App\\Controller\\TripController::edit' => '?',
            'App\\Controller\\TripController::index' => '?',
            'App\\Controller\\TripController::show' => '?',
            'App\\Controller\\TypeOfVehiculeController::delete' => '?',
            'App\\Controller\\TypeOfVehiculeController::edit' => '?',
            'App\\Controller\\TypeOfVehiculeController::index' => '?',
            'App\\Controller\\TypeOfVehiculeController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Controller\\VehiculeController::delete' => '?',
            'App\\Controller\\VehiculeController::edit' => '?',
            'App\\Controller\\VehiculeController::index' => '?',
            'App\\Controller\\VehiculeController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuthenticatorController:login' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\TravelPreferencesController:delete' => '?',
            'App\\Controller\\TravelPreferencesController:edit' => '?',
            'App\\Controller\\TravelPreferencesController:index' => '?',
            'App\\Controller\\TravelPreferencesController:show' => '?',
            'App\\Controller\\TripController:delete' => '?',
            'App\\Controller\\TripController:edit' => '?',
            'App\\Controller\\TripController:index' => '?',
            'App\\Controller\\TripController:show' => '?',
            'App\\Controller\\TypeOfVehiculeController:delete' => '?',
            'App\\Controller\\TypeOfVehiculeController:edit' => '?',
            'App\\Controller\\TypeOfVehiculeController:index' => '?',
            'App\\Controller\\TypeOfVehiculeController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'App\\Controller\\VehiculeController:delete' => '?',
            'App\\Controller\\VehiculeController:edit' => '?',
            'App\\Controller\\VehiculeController:index' => '?',
            'App\\Controller\\VehiculeController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
