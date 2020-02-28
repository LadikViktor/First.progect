<?php
// print_r($_POST);
file_put_contents('file/' . $_POST['fileName'], $_POST['text']);
header("location: refr.php");
