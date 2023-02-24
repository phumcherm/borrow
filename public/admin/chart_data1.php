<?php
$con = new mysqli('172.17.0.1:9906', 'ceitdb', '12345678', 'ceitdb');
$query = $con->query("SELECT COUNT(detail) AS COUNT ,DATE_FORMAT( br_time, '%d%-%m%-%Y') AS br_time  FROM itemdata,borrow 
WHERE itemdata.id = borrow.id  GROUP BY DATE_FORMAT( br_time, '%d%-%m%-%Y') 
");
$data = array();
foreach ($query as $row) {
    // $data[] = $query;
    array_push($data, $row);
}
echo json_encode($data);
