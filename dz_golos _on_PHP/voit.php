<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .result {
            display: flex;
            flex-direction: column;
            font-size: 20px;
            border: 2px solid gray;
            border-radius: 10px;
            justify-content: center;
            width: 250px;
            height: 250px;
            margin: 10px;
            background-color: white;
            padding-left: 10px;

        }

        h3 {
            display: flex;
            justify-content: center;
            padding-left: 10px;

        }

        .fonresult {
            display: flex;
            flex-direction: column;
            background-color: #DCDCDC;
            border: 2px solid black;
            border-radius: 10px;
            width: 300px;
            height: 250px;
            margin-left: 10px;
            margin-top: 10px;
            padding-left: 10px;
        }

        .str{
            height: 20px;
            border: 1px solid;
            border-radius: 5px;
            background-color: red;
    
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php
    $ind = $_POST['voting'];
    $arr = file('swoi.txt');
    $buf = explode(" - ", $arr[$ind]);
    $buf[1] += 1;
    $arr[$ind] = implode(" - ", $buf) . "\n";
    file_put_contents('swoi.txt', $arr);
    $sum = 0;
    $array = array(1, 2);
    for ($i = 1; $i < count($arr); $i++) {
        $sum = $sum + explode(" - ", $arr[$i])[1];
    }
    ?>

    <div class="fonresult">
        <h3><?= $arr[0] ?></h3>

        <div class="result">
            <?
            for ($i = 1; $i < count($arr); $i++) {
                $buf = explode(' - ', $arr[$i]);
                $result = round($buf[1]/ $sum *100); 
               
                echo "<div class='str' style = 'width: {$result}px'></div> $buf[0] - $result %<br>";
            }

            ?>

        </div>
    </div>
</body>

</html>