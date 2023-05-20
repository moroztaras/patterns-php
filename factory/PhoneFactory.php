<?php

class PhoneFactory
{
    public function createCellPhone():Phone
    {
        return new CellPhone();
    }

    public function createSmartPhone():Phone
    {
        return new SmartPhone();
    }

    public function createIPhone():Phone
    {
        return new IPhone();
    }
}