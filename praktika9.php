<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* body {
            font-size: 20px;
            font-weight: bold;
            color: black;
            display: flex;
            justify-content: center;
            margin-top: 100px;
            font-family: Century;

            


        } */
    </style>
</head>

<body>
    <?php
    // Файловая система PHP


    // создание файла
    // $fp = fopen ("file.txt", "w+");
    // fwrite ($fp, "Test");
    // fclose($fp);





    // // переход на web ресурс
    // $handle = fopen("http://php.net/", "r");
    // $contents = '';
    // while (!feof($handle)) {
    //     $contents .= fread($handle, 1);
    // }
    // fclose($handle);
    // echo $contents;






    // // удаляет директорию
    // rmdir ("del");






    // читает содержимое файла и помещает его в массив
    $fp = fopen("file33.txt", "w+");
    fwrite($fp, "Test");
    fclose($fp);

    // $w = file("file33.txt");
    // print_r($w);



    // читает файл и записывает его в буфер
    readfile("file33.txt");

    ?>



</body>

</html>