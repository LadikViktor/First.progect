<?php
rename('file/' . $_POST['oldname'], 'file/' . $_POST['name'] . '.' . $_POST['ext']);
header("location: refr.php");
