<?php

use W1019\DbTable;

include "src/autoload.php";

$table = new DbTable(
    new mysqli(
        "localhost",
        "root",
        "root",
        "bd124"
    ),
    "table124"
);

print_r($table->get());

// echo $table->add(["text" => "Привет", "name" => "Вася"]);
// echo $table->add(["text" => "HELLO", "name" => "Petya"]);
// $table->edit(5, ["text" => "Всем Привет", "name" => "Рамзан"]);
$table->del(4);
