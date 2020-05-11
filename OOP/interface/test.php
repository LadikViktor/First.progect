<?php

include 'autoload.php';

$file = new JsonFile('data.json');

$file->save(['a' => 1, 'h' => 2, 'x' => 3, 'g' => 4]);

// print_r($file->load());



$file = new IniFile('data.ini');

$file->save(['a' => 1, 'b' => 2, 'c' => 3, 'l' => 4]);

// print_r($file->load());



$file = new IniFile('data.php');

$file->save(['a' => 1, 'b' => 2, 'c' => 3, 'PPH' => 4]);

print_r($file->load());
