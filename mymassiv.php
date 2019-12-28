<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 70px;
            font-weight: bold;
            color: brown;
            text-align: center;
            margin-top: 100px;
            font-family: Century;
            background-color: #53ea93;

        }
    </style>
</head>

<body>
    <?php
    //Пример1
    $a = 30;
    $b = 120;
    $c = 10;
    $d = 45;
    $e = 18;
    echo max($a, $b, $c, $d, $e);
    echo "<br>";
    echo "<br>";
    echo "<br>";


    //Пример2
    $a = 30;
    $b = 120;
    $c = 10;
    $d = 45;
    $e = 18;
    $number = [$a, $b, $c, $d, $e];
    $max = max($number);
    $min = min($number);
    echo "Min value: $min <br>";
    echo "Max value: $max <br>";
    echo "<br>";



    ?>



</body>

</html>