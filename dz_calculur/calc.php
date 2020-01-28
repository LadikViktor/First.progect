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
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $a * $b;
    echo "$a * $b= $c";
    file_put_contents('calc.txt', "$a * $b = $c". "\n", FILE_APPEND);



    

















    
    //второй способ
     // $a = $_POST['num1'];
    // $b = $_POST['num2'];
    // $d = $_POST['num1'] * $_POST['num2'];
    // $f = fopen('calc.txt', 'a');
    // fwrite($f, "$a * $b = $d" . "\n");
    // fclose($f);
    ?>
</body>

</html>