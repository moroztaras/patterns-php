<?php

class DHLDeliveryFactory implements AbstractFactoryInterface
{

    public function createDeliveryService(): DeliveryServiceInterface
    {
        return new DHLDeliveryService();
    }

    public function createPackage(): PackageInterface
    {
        return new DHLPackage();
    }
}