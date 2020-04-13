<?php
// Выводятся цифры 4 и 9
// function my_fun($x)
// {
//     return $x * $x;
// }
// $a = "my_fun";

// echo $a(2);
// echo "<br>";
// echo $a(3);




// вызов анонимной функции
// function my_fun($name)
// {
//     $name();
// }

// my_fun(function () {
//     echo "Hello";
// });




// сохраняем анонимную функцию в переменную
// вызываеваем ее с параметром
// $a = function ($name) {
//     echo "Hello $name<br>";
// };

// $a("Piter");

// $b = $a;
// $b("Alex");






// выводит корень квадратный
// function speed_test($fun, $arg, $n = 100000)
// {

//     $time1 = microtime(TRUE);

//     for ($i = 0; $i < $n; $i++) {
//         $fun($arg);
//     }

//     $time2 = microtime(TRUE);

//     return $time2 - $time1;
// }

// echo pow(2, .5); // 2^(1/2)
// function my_sqrt($x)
// {
//     return pow($x, .5);
// }

// function my_sqrt2($y)
// {
//     return $y ** 0.5;
// }

// echo speed_test(sqrt, 20);
// echo "<br>";
// echo speed_test(my_sqrt, 20);
// echo "<br>";
// echo speed_test(my_sqrt2, 20);








// выводит 2 массива, второй из квадрата числа 1-го массива
// echo "<pre>";
// $a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// print_r($a1);

// $a2 = array_map(function ($x) {
//     return $x * $x;
// }, $a1);
// print_r($a2);
// echo "</pre>";



// echo "<pre>";
// $a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// print_r($a1);

// $a2 = array_map(function ($x) {
//     return $x * $x;
// }, $a1);
// print_r($a2);

// $a3 = [];
// foreach ($a1 as $value) {
//     $a3[] = $value * $value;
// }
// print_r($a3);
// echo "</pre>";






// cборка первых примеров
// function speed_test($fun, $arg, $n = 100000)
// {

//     $time1 = microtime(TRUE);

//     for ($i = 0; $i < $n; $i++) {
//         $fun($arg);
//     }

//     $time2 = microtime(TRUE);

//     return $time2 - $time1;
// }


// $a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// function test1($array)
// {
//     array_map(function ($x) {
//         return $x * $x;
//     }, $array);
// };

// function test2($array)
// {
//     $a = [];
//     foreach ($array as $value) {
//         $a[] = $value * $value;
//     }
//     return $a;
// };

// function test3($array)
// {
//     $a = [];
//     for ($i = 0; $i < count($array); $i++) {
//         $a[] = $array[$i] * $array[$i];
//     }
//     return $a;
// }
// echo speed_test('test1', $a1);
// echo "<br>";
// echo speed_test('test2', $a1);
// echo "<br>";
// echo speed_test('test3', $a1);
// echo "<br>";


// Фильтрует массив
// echo "<pre>";
// $a1 = array(1, -2, 3, 4, -5, 6, -7, -8, 9, 10);
// print_r($a1);

// $a2 = array_filter($a1, function ($x) {
//     return $x > 0;
// });
// print_r($a2);
// echo "</pre>";






//перебирает массив и для каждого элемента выводит анон функцию
// echo "<pre>";
// $a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// print_r($a1);

// array_walk($a1, function ($item, $key) {
//     echo "$key=> $item<br>";
// });
// echo "</pre>";






// + 3 элемент в функции и переход по ссылке
echo "<pre>";
$a1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r($a1);

array_walk($a1, function (&$item, $key, $sp) {
    $item = "$key $sp $item";
}, "=");
print_r($a1);

echo "</pre>";







// Замыкание
// $msg = "Hello";

// $test = function () use ($msg) {
//     echo $msg;
// };

// $msg = "bye";

// $test();





// замыкание с & выдает bye
// $msg = "Hello";

// $test = function () use (&$msg) {
//     echo $msg;
// };

// $msg = "bye";

// $test();
