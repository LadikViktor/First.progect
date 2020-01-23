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

    // $f = file_get_contents('myfile.txt') + 1;
    // $w = file_put_contents('myfile.txt', $f);
    // echo '<span style="color:green; font-size: 40px;">' . $f . '</span>';

  
    $f = ("filename_1.txt");
$h = file($f);
$h[0] ++;
$fp = fopen($f , "w");
fputs($fp , "$h[0]");
fclose($fp);
echo $h[0];

    $handle = fopen("http://php.net/", "r");
    $contents = '';
    while (!feof($handle)) {
        $contents .= fread($handle, 1);
    }
    fclose($handle);
    echo $contents;




    



    ?>


</body>

</html>