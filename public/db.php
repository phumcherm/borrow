<?php 

$serverName = "172.18.0.1:9906";
$userName = "ceitdb";
$password = "12345678";
$dbName = "ceitdb";

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
    echo "Fail to connect";
    exit();
}
echo "Connection success!"

?>