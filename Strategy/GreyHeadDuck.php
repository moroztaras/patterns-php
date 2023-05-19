<?php

class GreyHeadDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWings());

        $this->setQuackBehavior(new HighQuack());
    }
}