<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 40px;
            font-weight: bold;
            color: black;
            display: flex;
            justify-content: center;
            margin-top: 100px;
            font-family: Century;

        }
    </style>
</head>

<body>

    <?php $a = 5; ?>

    <?php if ($a == 5) : ?>

        A is equal to 5

    <?php endif; ?>

    <br>

    <?php if ($a == 5) { ?>

        A is equal to 5

    <?php }; ?>

    <br>
    <?php

    //for

    for ($i = 1; $i <= 10; $i++) {
        echo "$i <br>";
    }
    ?>

    <br>

    <?php

    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }
    ?>
    <br>

    <?php

    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }
    echo "<br>";

    $s = 0;
    for ($i = 1; $i <= 10; $i++) {
        $s = $s + $i;
    }
    echo $s;
    echo "<br>";

    //foreach

    $arr = array("one", "two", "three");
    foreach ($arr as $value) {
        echo "Value: $value<br>\n";
    }
    echo "<br>";
    $arr = array("one", "two", "three");
    foreach ($arr as $key => $value) {
        echo "Key: $key; Value: $value<br>\n";
    }
    echo "<br>";
    $s = 0;
    $array = array(1, 2, 3, 4);
    foreach ($array as $value) {
        $s = $s + $value;
    }
    echo $s;
    echo "<br>";
//while
$i=1;
while($i <=10){
    echo $i++;
}
echo "<br>";
$i=1;
while($i <=10):
    echo $i;
    $i++;
endwhile;
echo "<br>";


$s=0;
$i=1;
while($i<=10):
    $s=$s+$i;
    $i++;
    
    
endwhile;
echo $s;
echo "<br>";
//do-while

$i=0;
do{
    echo $i;
}while ($i>0);
echo "<br>";

$i=1;
$s=0;
do {
    
    $s=$s+$i;
    $i++;
}while ($i<=10);
echo $s;



echo "<br>";
$i=3;
$p=1;
do {
    
    $p=$p*$i**2;
    $i++;
}while ($i<=12);
echo $p;
echo "<br>";

$p=1;
for ($i = 3; $i <= 12; $i++) {
    $p=$p*$i**2;
   
   }
   echo $p;
   echo "<br>";

   //switch
   $i=5;
   switch ($i){
case 4:
    echo 4;
break;
case 5:
    echo 5;
break;
default:
echo "\$i=$i";

   }
   echo "<br>";

   $i=5;
   switch ($i){
case 0:
    echo "ноль";
break;
case 1:
    echo "один";
break;
case 2:
    echo "два";
break;
case 3:
    echo "три";
break;
case 4:
    echo "четыре";
break;
case 5:
    echo "пять";
break;
case 6:
    echo "шесть";
break;
case 7:
    echo "семь";
break;
case 8:
    echo "восемь";
break;
case 9:
    echo "девять";
break;
default:
echo "введено неверное число";
   }
    ?>



</body>

</html>