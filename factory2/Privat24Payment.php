<?php

include ('PaymentInterface.php');

class Privat24Payment implements PaymentInterface
{
    public function pay(Order $order):void
    {
        echo 'Privat24 pay success '.$order->getSum().'$'.PHP_EOL;
    }
}