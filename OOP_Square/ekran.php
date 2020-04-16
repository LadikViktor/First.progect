<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .square {
        color: red;
        font-size: 25px;
    }

    .text {
        color: green;
        font-size: 20px;
    }

    b {
        font-size: 23px;
    }
</style>

<body>


    <?php

    include('autoload.php');

    $result = new Square(5);

    echo "<span class='square'>Квадрат:</span>";
    echo "<br>";
    echo "<span class='text'>периметр квадрата = </span>" . '<b>' . $result->perimeter() . '</b>';
    echo "<br>";
    echo "<span class='text'>площадь квадрата = </span>" . '<b>' .  $result->area() . '</b>';
    echo "<br>";
    echo "<br>";


    $resultCircle = new Circle(5);

    echo "<span class='square'>Окружность:</span>";
    echo "<br>";
    echo "<span class='text'>периметр окружности= </span>" . '<b>' .  $resultCircle->perimeter() . '</b>';
    echo "<br>";
    echo "<span class='text'>площадь окружности= </span>" . '<b>' .  $resultCircle->area() . '</b>';
    echo "<br>";
    echo "<br>";



    $resulttriangle = new Triangle(3, 4, 5);
    echo "<span class='square'>Треугольник:</span>";
    echo "<br>";
    echo "<span class='text'>периметр треугольника= </span>" . '<b>' . $resulttriangle->perimeter() . '</b>';
    echo "<br>";
    echo "<span class='text'>площадь треугольника= </span>" . '<b>' . $resulttriangle->area() . '</b>';
    echo "<br>";
    echo "<br>";
    ?>

</body>

</html>