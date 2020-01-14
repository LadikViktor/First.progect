<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 20px;
            font-weight: bold;
            color: black;

            margin-top: 100px;
            font-family: Century;



        }
    </style>
</head>

<body>

    <?php
    $deposit = 2000; // - начальная сумма вклада
    $procent = 11.5; // - процентная ставка
    for ($month = 1; $month <= 14; $month++) {
        $deposit = ($deposit + ($deposit * ($procent / 12) * 0.01));
        echo "$month месяц накопления составят = $deposit;<br/>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Сумма на банковском вкладе через 12 месяцев = $deposit";

    ?>


</body>

</html>