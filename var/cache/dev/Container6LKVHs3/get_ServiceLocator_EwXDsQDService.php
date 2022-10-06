<?php

namespace Container6LKVHs3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EwXDsQDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ewXDsQD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ewXDsQD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'deliveryRepository' => ['privates', 'App\\Repository\\DeliveryRepository', 'getDeliveryRepositoryService', true],
        ], [
            'deliveryRepository' => 'App\\Repository\\DeliveryRepository',
        ]);
    }
}