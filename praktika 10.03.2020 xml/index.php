<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('fun.php');
    foreach (mass('ws.xml') as $value) {
        echo '' . smile($value["text"]) . '<br>' . $value["name"] . '<br>' . $value["date"] . '<br>';
    }
    ?>

    <form action="swit.php" method="POST">
        <textarea style='color:red; font-size:25px;' cols="20" rows="10" name="text">
        </textarea><br>
        <input style='color:green; font-size:20px;' type="text" name="name"><br>
        <input type="submit" value="OK">

    </form>

</body>

</html>