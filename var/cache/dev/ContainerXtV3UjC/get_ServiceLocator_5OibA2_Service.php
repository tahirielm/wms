<?php

namespace ContainerXtV3UjC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5OibA2_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5OibA2.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5OibA2.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'product' => ['privates', '.errored..service_locator.5OibA2..App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.5OibA2.": it references class "App\\Entity\\Product" but no such service exists.'],
        ], [
            'product' => 'App\\Entity\\Product',
        ]);
    }
}
