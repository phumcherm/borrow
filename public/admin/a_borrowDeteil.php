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

    $query = "SELECT  *, DATE_FORMAT(bk_time, '%M / %d / %Y') bk_date
    FROM ceitdb.`borrow` left join ceitdb.itemdata on borrow.id = itemdata.id left join ceitdb.user on borrow.user_id = user.user_id 
    left join ceitdb.back on borrow.br_id = back.br_id
    where borrow.status = 0";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($result);
    $jasonArray = array(
        'br_id' => $data['br_id'],
        'bk_id' => $data['bk_id'],
        'user_id' => $data['user_id'],
        'id' => $data['id'],
        'detail' => $data['detail'],
        'itemCode' => $data['itemCode'],
        'activity' => $data['activity'],
        'location' => $data['location'],
        'br_date' => $data['br_date'],
        'br_time' => $data['br_time'],
        'fname' => $data['fname'],
        'lname' => $data['lname'],
        'phone_num' => $data['phone_num'],
        'post' => $data['post'],
        'department' => $data['department'],
        'bk_date' => $data['bk_date']

    );
    exit(json_encode($jasonArray));
}
?>
