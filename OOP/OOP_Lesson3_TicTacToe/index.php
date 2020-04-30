<?php
include 'autoload.php';

$tic = new Tictac(3);
// $tic->initMap(5);
// print_r($tic->map);
$tic->putCross(1, 1);
// print_r($tic->map);
$tic->putNull(2, 2);
// print_r($tic->map);

$table = new Table();

echo $table
    ->style('border: 2px solid black; width:200px;  height: 200px;
    background-color:darkgreen;  ')
    ->data($tic->map)
    ->html();
