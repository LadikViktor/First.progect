<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
$a=3;
$b=4;
$c=$a%$b;
echo $c;

$a='1';
$b=2;
$c=$a+$b;
echo '<br>';
echo $c;

$a='1';
$b=2;
$c=$a.$b;
echo '<br>';
echo $c;

$a=($b=4)+5;
echo '<br>';
echo $a;

$a=5;
$a+=5;
echo '<br>';
echo $a;

$b="П р и в е т";
$b.= "в с е м";
echo '<br>';
echo $b;

echo '<br>';
echo('2'===2)*1;
echo '<br>';
echo('1'==1)*1;

$a=1;
$b=++$a;
echo '<br>';
echo $b;

$a=1;
$b=$a++;
echo '<br>';
echo $b;




    ?>
</body>
</html>