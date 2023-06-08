<?php

class Singleton
{
    private $instance;

    private function __construct() {}

    public function getInstance()
    {
        if ($this->instance === null) {
            $this->instance = new self();
        }

        return $this->instance;
    }
}
