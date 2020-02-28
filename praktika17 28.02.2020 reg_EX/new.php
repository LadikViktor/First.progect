<?php

if (preg_match('/^[A-z0-9\-]{1,}@.{2,}\.\w{2,6}$/', $_POST['usermail'])) {
    echo 'ДА';
} else {
    echo 'НЕТ';
}
