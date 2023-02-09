<?php
$db_host = "172.17.0.1:9906"; //202.28.34.205
$db_user = "ceitdb"; //62011211097
$db_password = "12345678"; //62011211097
$db_name = "ceitdb"; //62011211097
try {
    $pdo = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}

