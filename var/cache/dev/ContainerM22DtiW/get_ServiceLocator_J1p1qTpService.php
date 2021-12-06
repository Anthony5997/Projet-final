<?php

namespace ContainerM22DtiW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J1p1qTpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j1p1qTp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j1p1qTp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
            'trip' => ['privates', '.errored..service_locator.j1p1qTp.App\\Entity\\Trip', NULL, 'Cannot autowire service ".service_locator.j1p1qTp": it references class "App\\Entity\\Trip" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
            'trip' => 'App\\Entity\\Trip',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
