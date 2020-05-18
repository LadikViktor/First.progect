<?php
spl_autoload_register(function ($class_name) { 
    // include $class_name . '.php';
    include str_replace('\\', DIRECTORY_SEPARATOR, __DIR__."\\$class_name.php");
});
