<?php

<<<<<<< HEAD
$servername = "172.19.0.1:9906";
$username = "ceitdb";
$password = "12345678";
	try {
        $conn = new PDO("mysql:host=$servername;dbname=ceitdb", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
   
    try {
        $db = new PDO("mysql:host=$servername;dbname=ceitdb", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        $e->getMessage();
    }
=======
$db_host = "172.17.0.1:9906"; //202.28.34.205
$db_user = "ceitdb"; //62011211097
$db_password = "12345678"; //62011211097
$db_name = "ceitdb"; //62011211097
>>>>>>> a0352478f648c165eee74e0bb57e0c8ca250dfa4

try {
    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}
date_default_timezone_set('Asia/Bangkok');

?>

