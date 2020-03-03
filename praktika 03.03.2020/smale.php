<?php
$pat="/\:\-\)/";
$img="<img width='20' src='1600.jpg'>";
echo preg_replace($pat, $img, $_POST['text']); 

