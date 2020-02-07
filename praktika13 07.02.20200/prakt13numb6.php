 <?
    if (!headers_sent()) {
        header('Location: http://www.tut.by/');
        exit;
    }
    echo '123';
//выведет 123 если перед тегом php пробел вместо ошибки
