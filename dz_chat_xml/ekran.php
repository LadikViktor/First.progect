<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
    <link href="main.css" rel='stylesheet'>
</head>
<body>
    <?php
    $mes_arr = file("script.txt");
foreach($mes_arr as $key => $value){
    
    echo "<div class = '" .(( $key % 2 )?'odd':'even'). "'>$value </div>";
}
include('fun.php');
SavGB(htmlspecialchars($_POST['UserName']), htmlspecialchars($_POST['for']), date('d.m.Y H:i:s'));
    ?>
</body>
</html>