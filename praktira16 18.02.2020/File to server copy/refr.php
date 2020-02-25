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
            echo "<a href='file/$name1'><img src= '$icon' width='16' height='16'> $name1 </a> $ras MB

            <a href='rename.php?file=$name1'><img src= 'smajliki.jpg' width='16' height='16'></a>

            <a href='del.php?file=$name1'><img src='kis.jpg''width='30' height='30'><br><br>";

           
        } else {

            echo "<a href='file/$name1'><img src= 'im.jpg'width='80' height='80'>$name1</a> $ras MB
            <a href='rename.php?file=$name1'><img src= 'smajliki.jpg' width='16' height='16'></a>
            <a href='derect.php?file=$name1'><img src='kis.jpg''width='30' height='30'><br><br>";

            
        }

        }
}



