<?php

namespace ContainerV9niXGV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HUl75nyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HUl75ny' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HUl75ny'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messageRepository' => ['privates', 'App\\Repository\\MessageRepository', 'getMessageRepositoryService', true],
            'userContacted' => ['privates', '.errored..service_locator.HUl75ny.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.HUl75ny": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'messageRepository' => 'App\\Repository\\MessageRepository',
            'userContacted' => 'App\\Entity\\User',
        ]);
    }
}
