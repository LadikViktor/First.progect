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

    function maxx($arr)
    {
        reset($arr);
        $max = current($arr);
        foreach ($arr as $v) {
            if ($v > $max)
                $max = $v;
        }
        return $max;
    }
    echo maxx([100, 250, 50, 4, 777, 32]);
    echo "<br>";
    echo maxx([-100, -250, -50, -4, -777, -32]);
    echo "<br>";
    echo maxx([0 => 100, 1 => 250, 2 => 50, 3 => 4, 4 => 777, 5 => 32]);
    echo "<br>";
    echo maxx(["one" => 33, "two" =>1000, "there" => 1500, "four" =>5])


    ?>



</body>

</html>