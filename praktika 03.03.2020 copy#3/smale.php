<?php
include('bbcode.php');
echo "<pre>" . bbcode(Markdown(smile(cens(urls(htmlspecialchars($_POST['text'])))))) . "</pre>";
