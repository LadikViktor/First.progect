<?php
include('connect.php');

if (!empty($_POST['text']) && !empty($_POST['name'])) {
    $mysqli->query(
        "INSERT INTO `www` VALUES (NULL, '$_POST[text]', '$_POST[name]')"
    );
    header('Location: gb.php');
}
