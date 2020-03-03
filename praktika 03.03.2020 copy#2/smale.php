<?php
$arr=[
    "/\:\-\)/",
    "/\:\-\(/"
];

$arr2=[
    '<img width="20" src="1600.jpg">',
    '<img width="20" src="gr.jpg">'
];

echo preg_replace($arr, $arr2, $_POST['text']); 
