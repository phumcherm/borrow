<?php

<<<<<<< HEAD
$db_host = "127.17.0.2"; //202.28.34.205
$db_user = "borrow"; //62011211097
$db_password = "12345678"; //62011211097
$db_name = "borrow"; //62011211097
=======
$db_host = "localhost"; //202.28.34.205
$db_user = "root"; //62011211097
$db_password = "1234"; //62011211097
$db_name = "ceitdb"; //62011211097
>>>>>>> 9000d3e942ba66f0eb5a5c9d589e3741ca6f5b38

try {
    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}
date_default_timezone_set('Asia/Bangkok');
