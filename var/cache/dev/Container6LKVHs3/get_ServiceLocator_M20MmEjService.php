<?php

namespace Container6LKVHs3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M20MmEjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M20MmEj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M20MmEj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'vehicle' => ['privates', '.errored..service_locator.M20MmEj.App\\Entity\\Vehicle', NULL, 'Cannot autowire service ".service_locator.M20MmEj": it references class "App\\Entity\\Vehicle" but no such service exists.'],
        ], [
            'em' => '?',
            'vehicle' => 'App\\Entity\\Vehicle',
        ]);
    }
}
