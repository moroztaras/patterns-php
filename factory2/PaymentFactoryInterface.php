<?php

declare(strict_types=1);

include ('PaymentInterface.php');

interface PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface;
}