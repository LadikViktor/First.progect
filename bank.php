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
    $deposit = 1000; // - начальная сумма вклада
    $procent = 0.1; // - процентная ставка
    for ($month = 1; $month <= 12; $month++) {
        $deposit = ($deposit * $procent) + $deposit;
        echo "$month месяц накопления составят = $deposit;<br/>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Сумма на банковском вкладе через 12 месяцев = $deposit";

    ?>


</body>

</html>