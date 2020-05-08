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

echo "<br>";


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

echo "<br>";
echo "<br>";

$form = new Form();

echo $form
    ->setAction('1.php')
    ->setContent((new Input())->setValue('Admin')->html() .
            (new Input())->setType('password')->setValue('123')->html() .
            (new Input())->setType('submit')->setValue('okey')->html()
    )
    ->html();

echo "<br>";

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
echo "<br>";

$button = new Button();

echo $button
    ->setName("button")
    ->settype('submit')
    ->setInnerText('ok')
    ->html();

echo "<br>";
echo "<br>";

$textarea = new TextArea();

echo $textarea
    ->setName('textarea')
    ->setId('123')
    ->setClass('class')
    ->setStyle('style')
    ->setColl(50)
    ->setRow(50)
    ->html();



$hr = new Hr();
echo $hr
    ->setColor('black')
    ->setSize(5)
    ->setWidth(1000)
    ->html();

echo "<br>";


$br = new Br();
echo $br
    ->html();

echo "<br>";



$img = new Img();
echo $img
    ->setSrc('C.png')
    ->setHeight(200)
    ->setWidth(200)
    ->setAlt('image')
    ->setBorder(1)
    ->html();

echo $br->html();

$h = new H();
echo $h->setLevel(1)
    ->setId('123')
    ->setClass('header')
    ->setStyle('qwerty')
    ->setInnerText('header')
    ->html();
