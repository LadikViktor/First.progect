<?php
include('bbcode.php');
echo "<pre>". bbcode(smile(cens(htmlspecialchars($_POST['text'])))) . "</pre>";


