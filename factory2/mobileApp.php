<?php

include ('Order.php');
include ('PaymentHelper.php');

$orderData = [
    [
        'order' => new Order(50),
        'paymentType' => 'privat24',
    ],
    [
        'order' => new Order(30),
        'paymentType' => 'privat24',
    ],
    [
        'order' => new Order(10),
        'paymentType' => 'privat24',
    ],
];
echo 'Mobile app payment'.PHP_EOL;

foreach ($orderData as $orderDataItem)
{
    $order = $orderDataItem['order'];
    $paymentType = $orderDataItem['paymentType'];
    $payment = PaymentHelper::getPaymentFactory($paymentType)->createPayment();
    $payment->pay($order);
}
echo PHP_EOL;