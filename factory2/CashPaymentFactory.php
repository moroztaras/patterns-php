<?php

declare(strict_types=1);

class CashPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new CashPayment();
    }
}