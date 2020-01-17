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
            text-align: center;
            margin-top: 100px;
            font-family: Century;



        }
    </style>
</head>

<body>
    <?php
    //  //факториал
    // function fact($n)
    // {
    // $f=1;  
    // for($i=1; $i<=$n; $i++){
    //     $f= $f * $i;
    // }

    // return $f;
    // }

    // echo fact(0);
    // echo "<br>";
    // echo fact(1);
    // echo "<br>";
    // echo fact(2);
    // echo "<br>";
    // echo fact(10);
    // echo "<br>";






    // факториал рекурсия

    // function fact($n)
    // {
    //     if ($n === 0) {
    //         $f = 1;
    //     } else {
    //         $f = fact($n - 1) * $n;
    //     }
    //     return $f;
    // }
    // echo fact(4);
    // echo "<br>";
    // echo fact(5);
    // // echo "<br>";
    // // echo fact(6);
    // // echo "<br>";







    // // замена переменной с помощью &
    // function plus(&$string)
    // {
    //     $string .= ' + Петя';
    // }
    // $str = 'Ира';
    // plus ($str);
    // echo $str; //Выведет 'Ира + Петя'
    // echo "<br>";







    // // вывод значения с помощью type
    // function makecoffee($type = "cappuccino")
    // {
    //     return "Making a cup of $type. \n";
    // }
    // echo makecoffee();
    // echo "<br>";
    // echo makecoffee("espresso");








    // $a=1; /* глобальная область видимости */
    // function Test()
    // {
    //     echo $a; /* ссылка на переменную локальной области видимости
    //     */
    // }
    // Test();
    // echo "<br>";


    // //Область видимости переменной
    // $a=1;
    // $b=2;
    // function Sum()
    // {
    //     global $a, $b;
    //     $b=$a+$b;
    // }
    // Sum();
    // echo $b;



    // //Статические переменные

    // function Test1()
    // {
    //     static $a=0;
    //     echo $a;
    //     $a++; 
    // }
    // echo Test1();
    // echo "<br>";
    // echo Test1();
    // echo "<br>";
    // echo Test1();
    // echo "<br>";

     $arr=array(1 => 'Иванов', 2 => 'Петров', 3 => '', 4 => '', 5 => '', 6 => '', 7 => '', 8 => '', 9 => '', 10 => 'Сидоров');
    
     foreach ($arr as $name)
     {
         echo '<tr>
                  <td>'.$arr[].'</td>
                //   <td>'.$student['subjects']['math'].'</td>
                //   <td>'.$student['subjects']['physics'].'</td>
                //   <td>'.$student['subjects']['chemistry'].'</td>
                //   <td>'.$student['subjects']['russian'].'</td>
                  <td></td>
         </tr>';
     }
     ?>
       ?>
     
 









</body>

</html>