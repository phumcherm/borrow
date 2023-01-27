<?php

require_once "../app/models/function.php";

// $itemCode =  ;
// $selectCount = new DB_con();
// $sql = $selectCount->selectCount();
// $row = mysqli_fetch_array($sql);

// $totalRow =  $row['num'];

$startRow = 0;
if (isset($_GET['numb'])) {
        $numb = $_GET['numb']; 

        $rowPerPage = 20;
        $rowPerPage + $numb;
} else {
        $rowPerPage = 10;
}

$selectPage = new DB_con();
$sql = $selectPage->selectPage($startRow, $rowPerPage);

while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row;
}

echo json_encode($data);
