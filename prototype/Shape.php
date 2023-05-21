<?php

class Shape
{
    private string $name;

    private string $color;

    public function __clone()
    {
        echo "I cloned";
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    public function getName(): string
    {
        return $this->name;

    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;

    }
}
