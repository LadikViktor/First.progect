<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Не удалось соединиться с сервером");
mysqli_select_db($link, "guestbook")
    or die("Не удалось выбрать БД");
