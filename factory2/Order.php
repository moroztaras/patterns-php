<?php

//include ('Privat24Payment.php');

class Order
{
    public function __construct(private int $sum)
    {
    }

    public function getSum(): int
    {
        return $this->sum;
    }
}