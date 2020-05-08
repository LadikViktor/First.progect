<?php

include 'autoload.php';
function test($str1, $str2, $text = '')
{
    if ($srt1 = $str2) {
        echo "Тест $text пройден\n";
    } else {
        echo "Тест $text не пройден\n $str1 == $str2\n";
    }
}

$img = new Img();


test(
    "<img src='C.png'>",
    $img->setSrc('C.png')->html(),
    "Img"
);

test(
    "<img src='2.png' width='100'height='100'>",
    $img->setSrc('C.png')->setWidth(100)->setHeight(100)->html(),
    "Img"
);

$br = new Br();

test(
    "<br>",
    $br->html(),
    "br"
);
