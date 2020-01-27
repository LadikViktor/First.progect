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
    file_put_contents("file.txt", file_get_contents("http://php.net"));


    ?>



</body>

</html>