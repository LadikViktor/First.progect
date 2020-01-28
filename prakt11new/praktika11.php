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
    $s = $_POST['s'];
    switch($_POST['s']){
        case '-':
            $c=$a - $b;
        break;
        case '*':
            $c=$a * $b;
        break;
        case '/':
            $c=$a / $b;
        break;
        case '+':
            default:
            $c= $a + $b;
        break;
    }
    echo "$a $s $b = $c";
    file_put_contents('calcer.txt', "$a $s $b = $c". "\n", FILE_APPEND);

    ?>
</body>

</html>