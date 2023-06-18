<?php

include ('PaymentInterface.php');

class CashPayment implements PaymentInterface
{
    public function pay(Order $order):void
    {
        echo 'Cash pay success '.$order->getSum().'$'.PHP_EOL;
    }
}