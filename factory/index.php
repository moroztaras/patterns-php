<?php

include 'PhoneInterface.php';
include 'PhoneFactory.php';
include 'CellPhone.php';
include 'SmartPhone.php';
include 'IPhone.php';

$factory = new PhoneFactory();
$cellPhone = $factory->createCellPhone();
$smartPhone = $factory->createSmartPhone();
$iPhone = $factory->createIPhone();

$cellPhone->call();
echo '</br>';

$smartPhone->call();
echo '</br>';

$iPhone->call();
