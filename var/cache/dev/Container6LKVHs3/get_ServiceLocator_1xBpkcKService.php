<?php

namespace Container6LKVHs3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1xBpkcKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1xBpkcK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1xBpkcK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'vehicleRepository' => ['privates', 'App\\Repository\\VehicleRepository', 'getVehicleRepositoryService', true],
        ], [
            'vehicleRepository' => 'App\\Repository\\VehicleRepository',
        ]);
    }
}
