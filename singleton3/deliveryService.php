<?php

include ("Logger.php");

$message = 'Message from deliveryService';

$logger = Logger::getInstance();

var_dump($logger);
$logger->log($message);