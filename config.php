<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cv_saya';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo 'Connection failed!';
}
