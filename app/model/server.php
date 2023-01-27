<?php

$db_host = "127.19.0.2"; //202.28.34.205
$db_user = "borrow"; //62011211097
$db_password = "12345678"; //62011211097
$db_name = "borrow"; //62011211097

try {
    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}
date_default_timezone_set('Asia/Bangkok');
