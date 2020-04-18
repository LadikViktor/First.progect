<?php
// print_r($_POST);

include("Calculator.php");

$calc = new Calculator(
    $_POST['a'],
    $_POST['b']
);

echo $calc->{$_POST['op']}();
