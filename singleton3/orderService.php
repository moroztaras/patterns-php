<?php

include ("Logger.php");

$message = 'Message from orderService';

$logger = Logger::getInstance();
$logger
    ->setDateFormat('Y-m-d H:i:s')
    ->setLogType('error_log')
    ->setProfile('Alert')
;

var_dump($logger);
$logger->log($message);