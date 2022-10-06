<?php

namespace Container6LKVHs3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3JI8qnYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3JI8qnY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3JI8qnY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'supplier' => ['privates', '.errored..service_locator.3JI8qnY.App\\Entity\\Supplier', NULL, 'Cannot autowire service ".service_locator.3JI8qnY": it references class "App\\Entity\\Supplier" but no such service exists.'],
        ], [
            'em' => '?',
            'supplier' => 'App\\Entity\\Supplier',
        ]);
    }
}