<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="pkaktaction.php" method="post">


        <?php
        $arr = file("opros.txt");
        ?>
        <h2><?= $arr[0] ?></h2>

        <?
        for ($i = 1; $i < count($arr); $i++) {
            $buf = explode(" - ", $arr[$i])[0];
            echo "<label><input type='radio' name='vot' value='$i'>$buf</label><br>\n";
        }

        ?>
        <input type="submit" value="ok">
    </form>
</body>

</html>