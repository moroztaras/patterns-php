<?php

class YandexDeliveryFactory implements AbstractFactoryInterface
{

    public function createDeliveryService(): DeliveryServiceInterface
    {
        return new YandexDeliveryService();
    }

    public function createPackage(): PackageInterface
    {
        return new YandexPackage();
    }
}