<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="name.php" method="post">
<input type="text" name="name" value='<?=$_GET['file']?>'>
<input type="hidden" name="oldname" value='<?=$_GET['file']?>'>
<input id="a" type="submit" value="rename">

    </form>
    
</body>
</html>