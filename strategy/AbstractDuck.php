<?php

abstract class Duck
{
    private $flyBehavior;

    private $quackBehavior;

    public function setFlyBehavior($flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior($quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function fly()
    {
        $this->flyBehavior->fly();
    }

    public function quack()
    {
        $this->quackBehavior->quack();
    }
}