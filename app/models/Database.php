<?php

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


?>

