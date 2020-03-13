<?php
function SavGB($text, $name, $date)
{
    $str = <<<XML
\n<msg>
<text>$text</text>
<name>$name</name>
<date>$date</date>
</msg>
XML;
    return file_put_contents("ws.xml", $str, FILE_APPEND);
}



function mass($f)
{
    preg_match_all(
        '/<msg>.*?<text>(.*?)<\/text>.*?<name>(.*?)<\/name>.*?<date>(.*?)<\/date>.*?<\/msg>/ius',
        file_get_contents($f),
        $matches

    );




    $arr = [];
    foreach ($matches[1] as $key => $value) {
        $arr[$key]['text'] = $value;
        $arr[$key]['name'] = $matches[2][$key];
        $arr[$key]['date'] = $matches[3][$key];
    }
    return $arr;
}

function smile($f)
{
    $arr = [
        "/\:\-\)/",
        "/\:\-\(/",
        "/\:\(/",
        "/\:\)/"
    ];

    $arr2 = [
        '<img width="20" src="1600.jpg">',
        '<img width="20" src="gr.jpg">',
        '<img width="20" src="dsfsd.jpg">',
        '<img width="20" src="images.jpg">'
    ];

    return preg_replace($arr, $arr2, $f);
}
