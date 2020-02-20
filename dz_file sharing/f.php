<?php
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    copy($_FILES['userfile']['tmp_name'], "file\\" . $_FILES['userfile']['name']);
    $dir = opendir('file/');
    for ($dir; $name1 = readdir($dir); $dir++) {
        if ($name1 == '.' or $name1 == '..')
            continue;
        echo ('<a style="font-size: 25px;" href="file/' . $name1 . '">' . $name1 . '</a><br>');
    }
}
