<?php

namespace Container6LKVHs3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VGWEgaPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VGWEgaP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VGWEgaP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'receival' => ['privates', '.errored..service_locator.VGWEgaP.App\\Entity\\Receival', NULL, 'Cannot autowire service ".service_locator.VGWEgaP": it references class "App\\Entity\\Receival" but no such service exists.'],
        ], [
            'receival' => 'App\\Entity\\Receival',
        ]);
    }
}
