<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a class="a2" href="?action=newgame">New Game</a>

    <?php


    include 'autoload.php';
    echo "<br>";

    $ai = new Ai(3);

    // $ai->setSaver(new JsonFile('map.json'));
    // $ai->setSaver(new JsonFile('map.php'));
    $ai->setSaver(new SessionSaver('map'));

    $ai->loadMap();


    switch ($_GET['action']) {
        case 'shot':
            if (!empty($ai->searchEmptyCells()) && $ai->checWin() === null) {
                $ai->putCross($_GET['i'], $_GET['j']);
            }
            $ai->putRandNull();
            break;
        case 'newgame':
            $ai->initMap(3);
            break;
    }

    $ai->saveMap();

    if (empty($ai->searchEmptyCells()) || $ai->checWin() !== null) {

        if ($ai->checWin() === 1) {
            echo "<p style='color:red';>Выйграли крестики</p>";
        } elseif ($ai->checWin() === 0) {
            echo "Выйграли нолики";
        } else {
            echo "Ничья";
        }
    }

    // $ai->selfGaming();





    // $ai->initMap(3)
    //     ->putRandCross()
    //     ->putRandNull()
    //     ->putRandCross()
    //     ->putRandNull()
    //     ->putRandCross()
    //     ->putRandNull()
    //     ->putRandCross()
    //     ->putRandNull()
    //     ->putRandCross();

    $area = new Area();

    $area->setMap($ai->getMap());

    echo $area->html();


    ?>
</body>

</html>