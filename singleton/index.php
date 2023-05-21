<?php

include ("Singleton.php");

$singleton = new Singleton();

echo "<pre>";
    var_dump($singleton);
echo "</pre>";

$singleton->getInstance();

echo "<pre>";
    var_dump($singleton);
echo "</pre>";