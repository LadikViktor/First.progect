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

    $f = ("myfile.txt");
    $h = file($f);
    $h[0]++;
    $g = fopen($f, "w");
    fwrite($g, "$h[0]");
    fclose($g);
    echo '<span style="color:green; font-size: 40px;">' . $h[0] . '</span>';

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