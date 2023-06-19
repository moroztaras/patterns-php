<?php

class YandexDeliveryService implements DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package):void
    {
        echo 'Send the package through Yandex...'.PHP_EOL;
    }
}