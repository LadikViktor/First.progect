<?php
spl_autoload_register(function ($class_name) {
    // include $class_name . '.php';

    include str_replace('\\', '/', "$class_name.php");

    // include __DIR__ . DIRECTORY_SEPARATOR .
    // str_replace(
    // '\\',
    // DIRECTORY_SEPARATOR,
    // )

});
