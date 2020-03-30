<?php
include('connect.php');

if ((!empty($_POST['text']) && (!empty($_POST['name'])))) {
    $result = mysqli_query(
        $link,
        "INSERT INTO book VALUES(NULL, '$_POST[text]', '$_POST[name]')"
    );
    header('Location: bookcopy.php');
}
