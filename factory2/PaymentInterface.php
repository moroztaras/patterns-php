<?php

declare(strict_types=1);

include ('CashPayment.php');
include ('CashPaymentFactory.php');
include ('PaymentFactoryInterface.php');
include ('Privat24PaymentFactory.php');
include ('Privat24Payment.php');

interface PaymentInterface
{
    public function pay(Order $order):void;
}