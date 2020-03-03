<?php
function bbcode($f)
{

    $pat = ['/\[b\](.*)\[\/b\]/i', '/\[i\](.*)\[\/i\]/i', '/\[u\](.*)\[\/u\]/i'];
    $rep = ['<i>$1</i>', '<b>$1</b>', '<u>$1</u>'];
    return preg_replace($pat, $rep, $f);
}


function smile($f)
{
    $arr=[
        "/\:\-\)/",
        "/\:\-\(/",
        "/\:\(/",
        "/\:\)/"
    ];
    
    $arr2=[
        '<img width="20" src="1600.jpg">',
        '<img width="20" src="gr.jpg">',
        '<img width="20" src="dsfsd.jpg">',
        '<img width="20" src="images.jpg">'
    ];
    
    return preg_replace($arr, $arr2, $f);

}

function cens($f)
{
    if (preg_match("/(дурак|редиска)/i", $_POST['text'])) {
        echo 'У нас запрещен мат';
    } else {
        return $f;
    }

}

