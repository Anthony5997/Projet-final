<?php

namespace ContainerXvxuVLm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZiIE8w3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZiIE8w3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZiIE8w3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userRated' => ['privates', '.errored..service_locator.ZiIE8w3.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.ZiIE8w3": it references class "App\\Entity\\User" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'userRated' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
