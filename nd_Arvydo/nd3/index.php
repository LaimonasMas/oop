<?php

include __DIR__ .'/Grybas.php';
include __DIR__ .'/Krepsys.php';

$krepsys = new Krepsys;

while($krepsys->deti(new Grybas)) {}

_dc($krepsys);

