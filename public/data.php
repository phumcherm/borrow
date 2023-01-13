<?php

require_once "../app/models/function.php";

// $itemCode =  ;
$selectCount = new DB_con();
$sql = $selectCount->selectCount();
$row = mysqli_fetch_array($sql);

$totalRow =  $row['num'];

$rowPerPage = 5;
$startRow = 0;

$selectPage = new DB_con();
$sql = $selectPage->selectPage($startRow, $rowPerPage);

while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row;
 } 

 echo json_encode($data);
 
 ?>