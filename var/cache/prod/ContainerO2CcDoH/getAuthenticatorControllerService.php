<?php

namespace ContainerO2CcDoH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticatorControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AuthenticatorController' shared autowired service.
     *
     * @return \App\Controller\AuthenticatorController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AuthenticatorController'] = $instance = new \App\Controller\AuthenticatorController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\AuthenticatorController', $container));

        return $instance;
    }
}
