<?php
include('connect.php');
$del = "DELETE FROM `book` WHERE `book`.`id`= $_GET[id] ";
mysqli_query($link, $del);
header("Location: bookcopy.php");
