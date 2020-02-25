<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $file_name_arei = explode(".", $_GET['file']);
    $ext = $file_name_arei[count($file_name_arei) - 1];
    unset($file_name_arei[count($file_name_arei) - 1]);
    $file_noname_arei = implode(".", $file_name_arei);
    ?>
    <form action="name.php" method='post'>
        <input type="text" name="name" value='<?= $file_noname_arei ?>'>
        <input type="hidden" name="oldname" value='<?= $_GET['file'] ?>'>
        <input type="hidden" name="ext" value='<?= $ext ?>'>
        <input id="a" type="submit" value="rename">

    </form>

</body>

</html>