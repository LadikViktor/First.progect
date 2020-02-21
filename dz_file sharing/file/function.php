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
    $makefoo = true;
    /*Мы не можем вызывать функции foo() в этом месте,
поскольку она еще не определена, но мы можем
обратиться к bar()*/
    bar();

    if ($makefoo) {
        function foo()
        {
            echo "I dont't exist until program execution reaches me.\n";
        }
    }

    /* Теперь мы благополучно можем вызываnь foo (),
поскольку $makefoo была интерпретирована как true */

    if ($makefoo) foo();

    function bar()
    {
        echo "I dont't exist until program execution reaches me.\n";
    }
    
    echo "<br>";

   
    ?>




</body>

</html>