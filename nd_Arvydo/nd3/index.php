<?php

// include __DIR__ . '/Grybas.php';
// include __DIR__ . '/Krepsys.php';
include 'vendor\autoload.php';

$krepsys = new Miskas\Didelis\Krepsys;

while ($krepsys->deti(new Miskas\Mazas\Grybas)) {
}

_dc($krepsys);
