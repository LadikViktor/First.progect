<?php
if (preg_match('/@/', 'vstu@mail.ru')) { //ищет все символы @
    echo 'ДА';
} else {
    echo 'НЕТ';
}
echo '<br>';
echo '<br>';





//Символ "i" после закрывающегося
//ограничителя шаблона означает
//регистронезависимый поиск
if (preg_match("/php/i", "PHP is programming language")) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
echo '<br>';
echo '<br>';



//разделитель пробела
$str = 'hypertext3language5programming';
$chars = preg_split('/\d/', $str);
print_r($chars);
echo '<br>';
echo '<br>';




// найти данные из строки
$str = "not to be";

$pat = "/^(be)|(not\sto\sbe)$/i";

if (preg_match($pat, $str)) {
    echo "Вхождение найдено.";
} else {
    echo "Вхождение не найдено.";
}
echo '<br>';
echo '<br>';




// вывести Всем <b>Привет</b> !!! и заменить на курсив
$str = 'Всем <b>Привет</b> !!!';
$pat = '/<b>.*<\/b>/i';
$rep = '<i>$0</i>';

$str2 = preg_replace($pat, $rep, $str);
echo $str2;
echo '<br>';
echo '<br>';



//заменит тег <b> на курсив
$str = 'Всем <b>Привет</b> !!!';
$pat = '/<b>(.*)<\/b>/i';
$rep = '<i>$1</i>';

$str2 = preg_replace($pat, $rep, $str);
echo $str2;
echo '<br>';
echo '<br>';
