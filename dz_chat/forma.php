<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="main.css" rel='stylesheet'>
</head>

<body>
    <!-- <meta HTTP-equiv= "REFRECH" content -->
    <form action='?' method='POST'>
        <input  type = 'text' value="<?=$_POST ['UserName']?>" name ="UserName">
        <input type = 'text' name="for">
      
 
        <input class="submit" type="submit" value="OK">
    </form>

    <?php
if(!empty($_POST['for'])){
file_put_contents("script.txt", $_POST['UserName']. ":". $_POST['for']. "\n", FILE_APPEND);

}




    ?>
</body>

</html>