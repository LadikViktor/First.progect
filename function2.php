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

            margin-top: 100px;
            font-family: Century;



        }
    </style>
</head>

<body>
    <?php

    echo "<br>";

    function foo ()
    {
        function bar ()
        {
            echo "I dont't exist until foo() is called.\n";
        }
    }
    /* Мы пока не можем обратиться к bar (),
    поскольку она еще не определена. */

    foo();
    /* Теперь мы можем вызвать функцию bar (),
    обработка f00 () сделала ее доступной.*/

    bar();

    echo "<br>";

    
    ?>




</body>

</html>