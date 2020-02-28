<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class=" bg-light m-3">
    <?php
    $dir = opendir('file/');

    for ($dir; $name1 = readdir($dir); $dir++) {
        if ($name1 != '.' and $name1 != '..') {
            if (!is_dir("file/$name1")) {
                switch (explode('.', $name1)[1]) {
                    case 'docx':
                        $icon = 'a93cb.jpg';
                        break;
                    case 'pdf':
                        $icon = 'Malenkie-1.jpeg';
                        break;
                    default:
                        $icon = 's.jpg';
                        break;
                }

                $ras = round((filesize("file/$name1") / 1024) / 1024, 3);
                echo "<a class='badge badge-pill badge-info ' href='file/$name1'>
                <img class='rounded-circle' src= '$icon' width='16' height='16'> $name1 </a> 
                <span class='badge badge-pill badge-danger'>$ras MB</span>

            <a href='rename.php?file=$name1'><img class='rounded-pill' src= 'smajliki.jpg' width='16' height='16'></a>
            <a href='del.php?file=$name1'><img class='rounded-pill' src='kis.jpg''width='30' height='30'>
            <a href='area.php?file=$name1'><img class='rounded-pill' src='ves.jpg''width='30' height='30'>
            <a href='les.php?file=$name1'><img class='rounded-pill' src='37_1500.jpg''width='30' height='30'><br><br>";
            } else {

                echo "<a href='file/$name1'><img src= 'im.jpg'width='80' height='80'>$name1</a> $ras MB
            <a href='rename.php?file=$name1'><img src= 'smajliki.jpg' width='16' height='16'></a>
            <a href='derect.php?file=$name1'><img src='kis.jpg''width='30' height='30'><br><br>";
            }
        }
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>