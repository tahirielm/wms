<?php

namespace Container6LKVHs3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EF9e6lEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EF9e6lE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EF9e6lE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.EF9e6lE.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.EF9e6lE": it references class "App\\Entity\\Category" but no such service exists.'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'category' => 'App\\Entity\\Category',
            'em' => '?',
        ]);
    }
}