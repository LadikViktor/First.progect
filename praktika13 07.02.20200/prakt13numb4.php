<?php
//тип файла
header('Content-type: application/pdf');
//имя файла
header('Content-Disposition: attachment; filename="downloaded.pdf"');
//файл
readfile('MKA.pdf');
