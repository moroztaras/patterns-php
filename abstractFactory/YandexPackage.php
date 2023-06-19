<?php

class YandexPackage implements PackageInterface
{
    public function getConsist():void
    {
        echo 'Check the contents of the package Yandex...'.PHP_EOL;
    }
}