<?php

require_once "../app/models/function.php";

// $itemCode =  ;
// $selectCount = new DB_con();
// $sql = $selectCount->selectCount();
// $row = mysqli_fetch_array($sql);

// $totalRow =  $row['num'];


$selectBorrow = new DB_con();
$sql = $selectBorrow->selectBorrow();

while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row;
}

echo json_encode($data);
