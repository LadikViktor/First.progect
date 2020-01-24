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
            display: flex;
            justify-content: center;
            margin-top: 100px;
            font-family: Century;




        }
    </style>
</head>
<body>
    <?php
// $f="ma.txt";
// $q=fopen($f, "r");
// $q=fgets($f);
// fclose($f);
// $q=$q+1;
// echo "$q";
// $fp = fopen("file33.txt", "w+");
// fwrite($f, );
// fclose($f);

$f = "my.txt";
    $h = $f;
    $h++;
    $g = fopen($f, "w");
    fwrite($g, "$h");
    fclose($g);
    echo '<span style="color:green; font-size: 40px;">' . $h. '</span>';


?>



</body>
</html>