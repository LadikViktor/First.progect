<?php
if (preg_match('/д[\W0-9_]*у[\W0-9_]*р[\W0-9_]*а[\W0-9_]*к[\W0-9_]*/i', $_POST['usermail'])) {
    file_get_contents('ban.txt', $_POST['usermail']);
echo 'У нас запрещен мат, замените слово д**ак';
} else {
echo 'НЕТ';
}
