<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .table {
        color: red;
        border: 2px solid black;
        width: 300px;

        font-size: 20px;
    }

    textarea {
        color: red;
        border: 2px solid green;

    }

    input {
        color: red;
        border: 2px solid green;
    }
</style>

<body>

    <?php
    include('connect.php');
    $result = mysqli_query(
        $link,
        "SELECT * FROM book"
    )
        or die("Ну удалось выполнить запрос");

    echo "<table class='table', border='2'>\n";
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<tr>";
        echo "<td><a href='del.php?id=$row[0]'>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>\n";

    mysqli_free_result($result);

    mysqli_close($link);
    ?>
    <br>
    <form action="add.php" method="POST">
        <textarea name="text" id="" cols="30" rows="10"></textarea><br>
        <input type="text" name="name"><br>
        <input type="submit" value="OK"><br>

    </form>
</body>

</html>