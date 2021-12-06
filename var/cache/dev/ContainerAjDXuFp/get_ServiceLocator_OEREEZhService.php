<?php

namespace ContainerAjDXuFp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OEREEZhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OEREEZh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OEREEZh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
        ], [
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
        ]);
    }
}
