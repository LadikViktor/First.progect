<?php

use View\View;

include "../src/autoload.php";

include "../config/config.php";

$table = new Model\DbTable(
    new mysqli(
        $config['mysqli']['host'],
        $config['mysqli']['user'],
        $config['mysqli']['password'],
        $config['mysqli']['database'],

    ),
    $config['mysqli']['table']
);

// $table->add(["text" => "Hello", "name" => "Fred"]);
// print_r($table->get());

$data = $table->get();

$view = new View();
$view
    ->setLayout('mainLayout')
    ->setTemplate('table')
    ->setData(['table' => $data])
    ->view();
