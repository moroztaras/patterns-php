<?php

$orderData = [
    [
        'order' => new Order(500),
        'paymentType' => 'privat24',
    ],
    [
        'order' => new Order(3000),
        'paymentType' => 'privat24',
    ],
    [
        'order' => new Order(1000),
        'paymentType' => 'privat24',
    ],
];
echo 'Web site payment'.PHP_EOL;

foreach ($orderData as $orderDataItem)
{
    $order = $orderDataItem('order');
    $paymentType = $orderDataItem('paymentType');
    $payment = PaymentHelper::getPaymentFactory($paymentType)->createPayment();
    $payment->pay($order);
}
