<?php
$con = new mysqli('172.17.0.1:9906', 'ceitdb', '12345678', 'ceitdb');

$datestart = $_POST['datastart'];
$dateend = $_POST['dataend'];
$query = $con->query("SELECT COUNT(detail) AS COUNT ,DATE_FORMAT( br_time, '%d%-%M%-%Y') AS br_time  FROM itemdata,borrow WHERE itemdata.id = borrow.id AND br_time BETWEEN '$datestart' AND '$dateend' GROUP BY DATE_FORMAT( br_time, '%d%-%M%-%Y') ORDER BY br_time DESC");
$data = array();
foreach ($query as $row) {
    // $data[] = $query;
    array_push($data, $row);
}
echo json_encode($data);
