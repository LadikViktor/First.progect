<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 30px;
            font-weight: bold;
            color: brown;
            text-align: center;
            margin-top: 100px;
            font-family: Century;
            background-color: #53ea93;

        }
    </style>
</head>

<body>
    <?php
    $a = 3;
    echo "\$a=$a";

    echo "<br>";

    $arr = array("foo" => "bar", 12 => true);
    echo $arr["foo"]; //bar

    echo "<br>";
    echo $arr[12]; //1
    echo "<br>";

    $arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));

    echo $arr["somearray"][6]; //5
    echo "<br>";
    echo $arr["somearray"][13]; //9
    echo "<br>";
    echo $arr["somearray"]["a"]; //42
    echo "<br>";

    // Этот массив эквивалентен ...
    array(5 => 43, 32, 56, "b" => 12);
    // ... этому массиву
    $att = array(5 => 43, 6 => 32, 7 => 56, "b" => 12);
    echo "<pre>";
    print_r($att);
    echo "</pre>";

    $arr = array(5 => 1, 12 => 2);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr[] = 56; // В этом месте скрипта это
    // эквивалентно  $arr [13] = 56;
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr["x"] = 42; // Это добавляет к массиву новый
    //элемент с ключом "x"
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    unset($arr[5]); // Это удаляет элемент из массива
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    unset($arr); // Это удаляет массив полностью

    class foo
    {
        function do_foo()
        {
            echo "Doing foo.";
        }
    }
    $bar = new foo;
    $bar ->do_foo();
    echo "<br>";


    // Управляющие конструкции
    // if (выражение) инструкция
    $a = 10;
    $b = 5;
    if ($a > $b)
        echo "a больше b";
    echo "<br>";

    if ($a > $b) {
        echo "a больше, чем b";
        echo "<br>";
        $b = $a;
    }

    // else

    if ($a > $b) {
        echo "a is greater than b";
        echo "<br>";
    }else{
        echo "a is NOT greater than b";
        echo "<br>";
    }

    //elseif|else if

    if ($a > $b) {
        echo("a is bigger than b");
        }elseif ($a == $b) {
            echo "a is equal to b";
            echo "<br>";


        }else{
            echo("a is smaller than b");
            echo "<br>";
        }
            //Альтернативный синтаксис
            if ($a == 5): 
                echo "a equals 5";
            
                echo "...";
            
                elseif ($a == 6):
                    echo "a equals 6";
                   
                    echo "!!!";
                    
                else:
                    echo "a is neither 5 nor 6";
                    
                endif;
                
            
    



    ?>


</body>

</html>