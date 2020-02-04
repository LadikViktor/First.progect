<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form {
            display: flex;
            flex-direction: column;
            background-color: #DCDCDC;
            font-size: 15px;
            border: 2px solid black;
            border-radius: 10px;
            width: 300px;
            height: 250px;
            margin-left: 10px;
            margin-top: 10px;
        }

        h3 {
            display: flex;
            justify-content: center;
          margin-left: 10px;
           
        }

        label {
            justify-content: left;
            display: flex;
            background-color: white;
            margin-left: 10px;
            margin-right: 10px;



        }

        .chek {
            margin-top: 20px;
            background-color: blue;
            width: 50px;
            height: 25px;
            margin-left: 10px;
            border: 1px solid #BEBEBE;
            border-radius: 10px;

        }

        .stroka {
            background-color: white;
            width: 250px;
            height: 20px;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
            border: 1px solid #BEBEBE;
            border-top: none;
            border-left: none;
            border-right: none;
            font-family: Arial, Helvetica, sans-serif;

        }

        .pole {
            background-color: white;
            height: 100px;
            margin-left: 10px;
            margin-right: 10px;
            border: 1px solid #BEBEBE;
            border-radius: 10px;


        }
    </style>
</head>

<body>
    <div class='form'>
        <form action="voit.php" method="POST">
            <?php
                $arr = file('swoi.txt');
            ?>
            <h3><?= $arr[0] ?></h3>
            <div class="pole">
                <?php

                for ($i = 1; $i < count($arr); $i++) {
                    $buf = explode(" - ", $arr[$i])[0];
                    echo "<div class='stroka'><label><input type='radio' name='voting' value='$i'>$buf</label><br></div>";
                }

                ?>
            </div>

            <input class='chek' type="submit" value="OK">

        </form>
    </div>
</body>

</html>