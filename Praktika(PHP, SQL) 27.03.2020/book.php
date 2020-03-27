<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Не удалось соединиться с сервером");

mysqli_select_db($link, "guestbook")
    or die("Не удалось выбрать БД");

if ((!empty($_POST['text']) && (!empty($_POST['name'])))) {
    $result = mysqli_query(
        $link,
        "INSERT INTO book VALUES(NULL, '$_POST[text]', '$_POST[name]')"
    );
    header('Location: book.php');
}

?>
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
    $query = "SELECT * FROM book";

    $result = mysqli_query($link, $query)
        or die("Ну удалось выполнить запрос");

    echo "<table class='table', border='2'>\n";
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>\n";

    mysqli_free_result($result);

    mysqli_close($link);
    ?>
    <br>
    <form action="" method="POST">
        <textarea name="text" id="" cols="30" rows="10"></textarea><br>
        <input type="text" name="name"><br>
        <input type="submit" value="OK"><br>

    </form>
</body>

</html>