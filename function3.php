<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 60px;
            font-weight: bold;
            color: black;
            text-align: center;

            margin-top: 100px;
            font-family: Arial, Helvetica, sans-serif;



        }
    </style>
</head>

<body>
    <?php

    // function takes_array($input)
    // {
    //     echo '$input[0] + $input[1] =',
    //     $input[0]+$input[1];
    // }
    // takes_array(array(4, 6));

    // function mul($arr){
    //     for($i=0; $i<count($arr); $i++){
    //         $arr[$i]=$arr[$i]*2;
    //     }
    //     return $arr;
    // }

    //      print_r(mul([1,2,3,4,5,6,7,8,9]));

    $a = 2;
    $b = 3;
    $c = 4;
    $d = 5;
    function mul($a, $b, $c, $d)
    {

        if ($a > $b) {
            $buf = $a;
        } else {
            $buf = $b;
        }




        if ($c > $buf) {
            $buf = $c;
        } else {
            $buf = $d;
        }



        return $buf;
    }
    echo mul($a, $b, $c, $d);



    ?>




</body>


</html>