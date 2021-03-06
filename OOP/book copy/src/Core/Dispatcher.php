<?php

namespace Core;

use Controller\TableController;
use Model\DbTable;
use mysqli;
use View\View;

class Dispatcher
{
    public function __construct()
    {
    }

    public function run()
    {
        include __DIR__ . "/../../config/config.php";
        $view = new View();
        $view->setLayout('mainLayout');

        $controller = new TableController(
            new DbTable(
                new mysqli(
                    $config['mysqli']['host'],
                    $config['mysqli']['user'],
                    $config['mysqli']['password'],
                    $config['mysqli']['database'],
                ),
                $config['mysqli']['table']
            ),
            $view
        );
        // echo $_SERVER['REQUEST_URI'];
        $action = "action" . $_GET["action"];
        $controllerData = ['post' => $_POST, 'get' => $_GET];

        if (method_exists($controller, $action)) {
            $controller->{$action}($controllerData);
        } else {
            $controller->actionDefault();
        }

        // $controller->actionShow();
    }
}
