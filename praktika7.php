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
    //for
    $deposit = 2000; // - начальная сумма вклада
    $procent = 11.5; // - процентная ставка
    for ($month = 1; $month <= 14; $month++) {
        $deposit = $deposit + (($deposit * ($procent / 12) / 100));
    }
    echo "<br>";
    echo "Сумма на банковском вкладе через 14 месяцев = $deposit";
    echo "<br>";


    //while
    $deposit = 2000; // - начальная сумма вклада
    $procent = 11.5; // - процентная ставка
    $month = 1; // месяцы
    while ($month <= 14) {
        $month++;
        $deposit = $deposit + (($deposit * ($procent / 12) / 100));
    }
    echo $deposit;
    echo "<br>";


    // do while
    $deposit = 2000; // - начальная сумма вклада
    $procent = 11.5; // - процентная ставка
    $month = 1; // месяцы
    do {
        $deposit = $deposit + (($deposit * ($procent / 12) / 100));
        $month++;
    } while ($month <= 14);
    echo $deposit;
    echo "<br>";

    



    ?>






</body>

</html>