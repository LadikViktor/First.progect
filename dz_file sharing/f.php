<?php
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    copy($_FILES['userfile']['tmp_name'], "file\\" . $_FILES['userfile']['name']);

    $dir = opendir('file/');

    for ($dir; $name1 = readdir($dir); $dir++) {
        if ($name1 != '.' and $name1 != '..') {

            switch (explode('.', $name1[1])) {
                case 'docx':
                    $icon = 's.jpg';
                    break;
                case 'pdf':
                    $icon = 's.jpg';
                    break;
                default:
                    $icon = 's.jpg';
                    break;
            }
            echo ("<a href='file/$name1'><img src= '$icon' width='16' height='16'> $name1 </a><br>");
        }
    }
}
