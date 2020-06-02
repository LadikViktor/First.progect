<?php

// include 'src/autoload.php';

// use Point\Point;
// use Point\Line;

// $startPoint = new Point();
// $endPoint = new Point();

// $startPoint
//     ->setX(2)
//     ->setY(2);

// $endPoint
//     ->setX(5)
//     ->setY(6);
// // print_r($startPoint);

// $line = new Line();

// $line
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);
// // print_r($line);

// echo $line->getLength();



include 'src/autoload.php';

use Point\Point;
//use Point\Line;
use Point\Square;

$startPoint = new Point();
$endPoint = new Point();

$startPoint
    ->setX(1)
    ->setY(2);

$endPoint
    ->setX(3)
    ->setY(5);

// $line = new Line();

// $line
//     ->setStartPoint($startPoint)
//     ->setEndPoint($endPoint);

// $startPoint
//     ->setX(0)
//     ->setY(0);


// echo $line->getLength();

$square = new Square();

$square
    ->setStartPoint($startPoint)
    ->setEndPoint($endPoint);

echo $square->getPerimeter();
