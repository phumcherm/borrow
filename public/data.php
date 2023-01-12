<?php

require_once "../app/models/function.php";

// $itemCode =  ;
$selectWhereCode = new DB_con();
$sql = $selectWhereCode->selectWhereCode($itemCode);
while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row;
 } 

 echo json_encode($data);
 
 ?>