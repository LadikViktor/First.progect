<?php
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    copy($_FILES['userfile']['tmp_name'], "file\\" . $_FILES['userfile']['name']);
 

}
header("location: refr.php");

$org = $_FILES["userfile"]["name"];
$expansion = pathinfo($org, PATHINFO_EXTENSION);//Получаем расширение файла
$new_name = uniqid() . '.' . $expansion;//новое имя с расширением загружаемого файла
move_uploaded_file($_FILES["userfile"]["tmp_name"], "file/" . $new_name);//загрузка с измененным именем



