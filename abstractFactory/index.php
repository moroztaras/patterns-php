<?php

// task - check and send package
function delivery (array $factories)
{
    foreach ($factories as $factory) {
        //get service delivery
        $deliveryService = $factory->createDeliveryService();
        //get package
        $package = $factory->createPackage();
        //check contains package
        $package->getConsist();
        // send package
        $deliveryService->sendPackage($package);
    }
}
// Array factories
$factories = [
    new DHLDeliveryService,
    new YandexDeliveryService,
    new YandexDeliveryService,
    new DHLDeliveryService,
];

delivery($factories);