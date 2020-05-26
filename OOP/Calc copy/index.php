<?php
include 'src/autoload.php';

use Calcul\Calc;


$calc = new Calc();

echo $calc->mull(4, 2) . "\n";
// ->sum(7,7);
// ->diff(25,19);
// ->del(100,10);
