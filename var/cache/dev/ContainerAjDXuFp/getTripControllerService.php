<?php

namespace ContainerAjDXuFp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTripControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TripController' shared autowired service.
     *
     * @return \App\Controller\TripController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TripController.php';

        $container->services['App\\Controller\\TripController'] = $instance = new \App\Controller\TripController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\TripController', $container));

        return $instance;
    }
}
