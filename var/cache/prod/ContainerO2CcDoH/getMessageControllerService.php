<?php

namespace ContainerO2CcDoH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MessageController' shared autowired service.
     *
     * @return \App\Controller\MessageController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\MessageController'] = $instance = new \App\Controller\MessageController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\MessageController', $container));

        return $instance;
    }
}
