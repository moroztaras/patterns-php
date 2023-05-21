<?php

include 'Shape.php';

$shape = new Shape();
$shape
    ->setName('An ordinary shape')
    ->setColor('Red')
;
echo '<pre>';
echo $shape->getName().'</br>';
echo $shape->getColor().'</br>';
echo '</pre>';

$triangle = clone $shape;
$triangle
    ->setName('Triangle')
    ->setColor('Blue')
;
echo '<pre>';
echo $triangle->getName().'</br>';
echo $triangle->getColor().'</br>';
echo '</pre>';

$square = clone $shape;
$square
    ->setName('Square')
    ->setColor('Orange')
;
echo '<pre>';
echo $square->getName().'</br>';
echo $square->getColor().'</br>';
echo '</pre>';
