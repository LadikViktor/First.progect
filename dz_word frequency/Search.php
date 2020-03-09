<?php
preg_match_all('/\w+/iu', $_POST['text'], $mathes);

foreach ($mathes[0] as $_POST['text']) {
    $arr[$_POST['text']]++;
}

foreach ($arr as $value => $key) {
    echo "<span style='color:green; font-size:20px;'>$value</span>" . " - " . "<span style='color:red; font-size:25px;'>$key  раз  <br>  </span>";
}
