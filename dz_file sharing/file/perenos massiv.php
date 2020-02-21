<?php

header("Content-Type: text/plain");
$html=file("http://php.net");
foreach($html as $key => $value){
    echo$key. '|' .$value;
}   
?>
