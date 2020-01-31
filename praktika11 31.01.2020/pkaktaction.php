<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 30px;
            



        }
    </style>
</head>

<body>

    <?php
    //сохраняем и выводим результат файла
    $ind = $_POST['vot'];
    $arr = file('opros.txt');
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents('opros.txt', $arr);
    // foreach ($arr as $value) {
    //     echo "$value<br>";
    // }

    // находим сумму
    $sum = 0;
    $array = array(1, 2);
    for ($i = 1; $i < count($arr); $i++) {
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }
    // echo $sum;


    ?>

    <h1><?= $arr[0] ?></h1>


    <?
    // Добавляем проценты к результату
    for ($i = 1; $i < count($arr); $i++) {
        $buf = explode(" - ", $arr[$i]);
        echo $buf[0] . " = " . round($buf[1] / $sum * 100) . "%", "\n";
        echo " <img src='wwwwwwwwww.png' widht='" . (100 * $buf[1] / $sum) . "' height= '30'><br>";
    }
    ?>
</body>

</html>