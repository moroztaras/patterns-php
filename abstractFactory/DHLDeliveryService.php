<?php

class DHLDeliveryService implements DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package):void
    {
        echo 'Send the package through DHL...'.PHP_EOL;
    }
}