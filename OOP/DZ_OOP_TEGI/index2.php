<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: yellowgreen;
            margin: 0;
        }

        .col {
            color: red;
            font-size: 30px;
        }

        .col2 {
            color: saddlebrown;
            font-size: 30px;

        }

        .col3 {
            color: blue;
            font-size: 30px;

        }

        .ul {
            color: firebrick;
        }
    </style>

</head>

<body>

</body>

</html>
<?php

include 'autoload.php';

$b = new B('papapa');

echo $b
    ->setInnerText("<span class='col'>Hello World</span>")
    ->setClass("color")
    ->setId("12345")
    ->html();

$i = new I();

echo $i
    ->setInnerText("<p class='col2'>Hello World</p>")
    ->html();

$u = new U();

echo $u
    ->setInnerText("<p class='col3'>Hello World</p>")
    ->html();

$ul = new UL();

echo $ul
    ->setId('sp2')
    ->setInnerData([1, 2, 3])
    ->setType("circle")
    ->html();

$ol = new OL();

echo $ol
    ->setId('sp2')
    ->setInnerData(["a", "b", "c"])
    ->setType("asd")
    ->html();


$select = new Select();

echo $select
    ->setId('id1')
    ->setName('select')
    ->setInnerData([
        "mul" => "*",
        "div" => "/",
        "plus" => "+",
        "minus" => "-"
    ])
    ->html();

$form = new Form();

echo $form
    ->setAction('1.php')
    ->setContent((new Input())->setValue('Admin')->html() .
            (new Input())->setType('password')->setValue('123')->html() .
            (new Input())->setType('submit')->setValue('okey')->html()
    )
    ->html();

echo $form
    ->setAction('1.php')
    ->setContent((new Input())->setValue(12)->html())
    ->addContent((new Select())
        ->setInnerData([
            "mul" => "*",
            "div" => "/",
            "plus" => "+",
            "minus" => "-"
        ])
        ->html())
    ->addContent((new Input())->setValue(12)->html())
    ->addContent((new Input())->setType('submit')->setValue('okey')->html())
    ->html();
