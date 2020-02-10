<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="main.css" rel='stylesheet'>
</head>

<body>
    <div class='red' style="width: <?= $_GET['a'] ?>; height: <?= $_GET['b'] ?>; background-color: <?= $_GET['c'] ?>;"></div>

    <?php

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    $s = $_GET['a'] * $_GET['b'];
    echo '<br>';
    echo '<br>';
    echo 'Площадь прямоугольника = ', $s, 'px';
    ?>



</body>

</html>