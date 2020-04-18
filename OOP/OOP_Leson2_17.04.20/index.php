<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


</body>

<?php

// declare(strict_types=1);
include 'autoload.php';

$a = new A();

$a->clear();
$a->href('https://www.tut.by');
$a->innerText('Текст');
$a->class('btn');
$a->id('b1');
$a->style('color:red');
echo $a->HTML();
echo "<br>";


// Второй способ
echo $a->clear()
    ->href('https://www.tut.by')
    ->innerText('Текст')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();
echo "<br>";

echo $a
    ->clear()
    ->href('https://www.tut.by')
    ->innerText('Текст')
    ->HTML();
echo "<br>";





// Вызов объекта H
$h = new H(1);
echo $h
    // ->clear()
    // ->level()
    ->innerText('Заголовок')
    ->class('btn')
    ->id('b1')
    ->style('color:red')
    ->HTML();
echo "<br>";




// Вызов объекта T(тf,kbw)
$table = new Table();
echo $table->clear()
    ->style('border: 1px solid black')
    ->data([
        [1, 2, 3],
        [4, 5, 6]
    ])
    ->HTML();
echo "<br>";

?>




</html>