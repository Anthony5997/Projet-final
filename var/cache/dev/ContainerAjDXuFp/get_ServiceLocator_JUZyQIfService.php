<?php

namespace ContainerAjDXuFp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JUZyQIfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JUZyQIf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JUZyQIf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'travelPreference' => ['privates', '.errored..service_locator.JUZyQIf.App\\Entity\\TravelPreferences', NULL, 'Cannot autowire service ".service_locator.JUZyQIf": it references class "App\\Entity\\TravelPreferences" but no such service exists.'],
        ], [
            'travelPreference' => 'App\\Entity\\TravelPreferences',
        ]);
    }
}
