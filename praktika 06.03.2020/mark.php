<?php
$str2 = $_POST['hello'];
$hel = file_get_contents($_POST['mail']);
echo preg_match_all("/" . $str2 . "/iu", $hel);
