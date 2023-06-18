<?php

include ('PaymentFactoryInterface.php');
include ('PaymentInterface.php');

class Privat24PaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new Privat24Payment();
    }
}