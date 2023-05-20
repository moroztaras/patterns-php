<?php

include 'FlyInterface.php';
include 'QuackInterface.php';
include 'FlyWithoutWings.php';
include 'FlyWithWings.php';
include 'HighQuack.php';
include 'LowQuack.php';
include 'AbstractDuck.php';
include 'GreyHeadDuck.php';

$greyHeadDuck = new GreyHeadDuck();

$greyHeadDuck->fly();
echo "</br>";
$greyHeadDuck->quack();