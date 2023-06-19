<?php

class DHLPackage implements PackageInterface
{
    public function getConsist():void
    {
        echo 'Check the contents of the package DHL...'.PHP_EOL;
    }
}