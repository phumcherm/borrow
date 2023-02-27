<?php
$con = new mysqli('172.17.0.1:9906', 'ceitdb', '12345678', 'ceitdb');
$query = $con->query("SELECT detail, COUNT(detail) AS total FROM borrow,itemdata WHERE borrow.id = itemdata.id GROUP BY detail ORDER BY total DESC");
$data = array();
foreach ($query as $row) {
    // $data[] = $query;
    array_push($data, $row);
}
echo json_encode($data);
