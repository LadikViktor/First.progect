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
            
        }
    </style>
</head>
<body>
    <?php
//Обработка без секций
$ini_array = parse_ini_file("file.ini");
echo "<pre>";
print_r($ini_array);
echo "<br>";
//Обработка с секциями
echo "<pre>";
$ini_array = parse_ini_file("file.ini", true);
print_r($ini_array);



    ?>
</body>
</html>