<?php

include ('Privat24PaymentFactory.php');
include ('CashPaymentFactory.php');
include ('PaymentFactoryInterface.php');

class PaymentHelper
{
    public static function getPaymentFactory(string $paymentType):PaymentFactoryInterface
    {
        switch ($paymentType) {
            case 'privat24': {
                return new Privat24PaymentFactory();
            }
            case 'cash': {
                return new CashPaymentFactory();
            }
            default:{
                throw new Exception('Undefined payment type '.$paymentType);
            }
        }
    }
}