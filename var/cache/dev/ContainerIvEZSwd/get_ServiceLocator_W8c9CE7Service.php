<?php

namespace ContainerIvEZSwd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W8c9CE7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W8c9CE7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W8c9CE7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'typeOfVehicule' => ['privates', '.errored..service_locator.W8c9CE7.App\\Entity\\TypeOfVehicule', NULL, 'Cannot autowire service ".service_locator.W8c9CE7": it references class "App\\Entity\\TypeOfVehicule" but no such service exists.'],
        ], [
            'typeOfVehicule' => 'App\\Entity\\TypeOfVehicule',
        ]);
    }
}
