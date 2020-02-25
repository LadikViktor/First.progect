<?php
rename('file/' . $_POST['oldname'], 'file/' . $_POST['name']);
header("location: refr.php");