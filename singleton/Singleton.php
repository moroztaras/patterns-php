<?php

class Singleton
{
    private $instance;

    public function getInstance()
    {
        if (empty($this->instance)) {
            $this->instance = $this;
        }

        return $this->instance;
    }
}
