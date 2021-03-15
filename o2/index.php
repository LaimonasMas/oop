<?php

include __DIR__ .'/Eat.php';
include __DIR__ .'/River.php';
include __DIR__ .'/Bebras.php';
include __DIR__ .'/Udra.php';



$obj1 = new Bebras;
$obj2 = new Bebras;
$obj1->setRiver('Amazon');


$obj3 = new Udra;
$obj3->setRiver('Nilas');


echo '<pre>';
$obj1->gold;

echo Bebras::$color;

echo '<br>';
var_dump($obj1);
echo '<br>';

var_dump($obj2);
echo '<br>';

var_dump($obj3);


