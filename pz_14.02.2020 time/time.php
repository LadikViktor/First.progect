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
            font-weight: bold;
            color: brown;

            margin-top: 100px;
            font-family: Century;




        }
    </style>
</head>

<body>

    <?php
    // echo time(); // количество секунд с начала эпохи Unix
    // echo '<br>';
    // echo microtime(1);// с дробной частью msec
    // $time_start = microtime(1);

    // for ($i = 0; $i < 1000; $i++) {
    // }
    // $time_end = microtime(1);
    // $time = $time_end - $time_start;

    // echo "Ничего не делал $time секунд \n";

    echo "<pre>";
    $today = getdate();
    echo $today['month'];
    echo "<br>";
    echo $today['weekday'];
    echo "<br>";
    echo $today['wday'];
    echo "</pre>";


    $arr = [
        'Monday' => 'Понедельник',
        'Tuesday' => 'Вторник',
        'Wednesday' => 'Среда',
        'Thursday' => 'Четверг',
        'Friday' => 'Пятница',
        'Saturday' => 'Суббота',
        'Sunday' => 'Воскресенье'
    ];

    echo $arr[$today['weekday']];
    echo "<br>";
    echo $arr[getdate()['weekday']];



    $arrnumber = [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7'
    ];
    echo "<br>";
    echo $arrnumber[$today['wday']];
    echo "<br>";
    echo $arrnumber[getdate()['wday']];
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //date
    echo date("F j, Y, g:i a") . "<br>";
    echo date("m.d.y") . "<br>";
    echo date("j, n, Y") . "<br>";
    echo date("Ymd") . "<br>";
    echo date('h-i-s, j-m-y, it is w Day z') . "<br>";
    echo date('\i\t \i\s \t\h\e js \d\a\y.') . "<br>";
    echo date("D M j G:i:s T Y") . "<br>";
    echo date('H:m:s \m \i\s\ \m\o\n\t\h') . "<br>";
    echo date("H:i:s") . "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //mktime - возвращает метку времени для заданной даты
    echo date("M-d-Y", mktime(0, 0, 0, 12, 20, 2007));
    echo "<br>";
    echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 2007));
    echo "<br>";
    echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 2007));
    echo "<br>";
    echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 2007));
    echo "<br>";
    echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 07));
    echo "<br>";

    ?>




</body>

</html>