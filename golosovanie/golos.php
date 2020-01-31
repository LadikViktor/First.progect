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
 $i = $_POST['voting'];
 $arr= explode(';', file_get_contents('str.txt'));
 $arr[$i]++;
 file_put_contents('str.txt', implode(";", $arr));

 foreach ($arr as $key => $value) {
     echo "$key - $value<br>"; 
 }
    ?>
</body>
</html>