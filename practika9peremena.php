<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    // перемена файла
    // $fp = fopen("file1.txt", "w+");
    // fwrite($fp, "Test");
    // fclose($fp);

    // rename("file1.txt", "file2.txt");


    // // проверить файл на true или folse файл
    // if(is_file('file2.txt')){
    //     echo"true";
    
    // }else{
    //     echo"folse";
    

    // }
    echo"<br>";
    // проверить файл на true или folse является ли директорией
    if(is_dir('C:\\ospanel\\domains\\test22\\First.progect')){
        echo"true";
    
    }else{
        echo"folse";
    

    }
    echo"<br>";
    //удаляет файл
    unlink("file.txt");


    ?>
</body>

</html>