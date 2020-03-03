<?php
$arr_words = file('ban.txt');
foreach ($arr_words as &$word) {
   $word = trim($word);
}
$words = implode('|',$arr_words);
if (preg_match("/$words/ui", $_POST['usermail'])) {
    echo 'У нас запрещен мат';
} else {
    echo 'Отлично';
}



