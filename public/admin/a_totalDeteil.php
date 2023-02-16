<?php

$severname = "172.17.0.1:9906";
$username = "ceitdb";
$password = "12345678";
$dbname = "ceitdb";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


<?php
if (isset($_POST['br_id'])) {
    $br_id = $_POST['br_id'];
    $query = "SELECT  
    itemdata.id,detail,itemCode,borrow.br_id ,borrow.activity , borrow.location ,borrow.br_date , borrow.br_time,borrow.status 
    FROM `itemdata`,borrow WHERE itemdata.id = borrow.id  
    AND borrow.br_id = '$br_id'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($result);
    $jasonArray = array(
        'br_id' => $data['br_id'],
        'id' => $data['id'],
        'detail' => $data['detail'],
        'itemCode' => $data['itemCode'],
        'activity' => $data['activity'],
        'location' => $data['location'],
        'br_date' => $data['br_date'],
        'br_time' => $data['br_time'],

    );
    exit(json_encode($jasonArray));
}
?>
