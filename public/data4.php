<?php
require_once "../app/models/function.php";
if (isset($_GET['code']) && !empty(isset($_GET['code']))) {
    $arr = $_GET['code'];
    // $result = "'" . implode ( "', '", $temp ) . "'";

    $selectWhereCode = new DB_con();
    $sql = $selectWhereCode->selectWhereCode($arr);

    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row;
    }

    // echo "นี่คือ : " . $itemCode;
    // $xxx = $arr;
    // $data[] = $xxx;
    // while ($temp) {
    //     $xxx = $temp;
    //     $data[] = $xxx;
    // }
    // echo json_encode($data1);
    echo json_encode($data);
} else if (isset($_GET['tb_id']) && !empty(isset($_GET['tb_id']))) {
    $tb_id = $_GET['tb_id'];

    $selectWhereId = new DB_con();
    $sql = $selectWhereId->selectWhereId($tb_id);
    $row = mysqli_fetch_array($sql);
    $data = $row;
<<<<<<< HEAD
=======
    echo json_encode($data);
} elseif (isset($_GET['selectedValues'])) {
    $selectedValues = $_GET['selectedValues'];

    $selectWhereId2 = new DB_con();
    $sql = $selectWhereId2->selectWhereId2($selectedValues);
    $row = mysqli_fetch_array($sql);
    $data = $row;
>>>>>>> 40c557a2107a79cb1ce49fbb7e378ccc6f168b39
    echo json_encode($data);
} else {
    $data[] = "พังละ";
    echo json_encode($data);
};

// if (isset($_GET['selectedValues'])) {
//     $selectedValues = $_GET['selectedValues'];

//     $selectWhereId2 = new DB_con();
//     $sql = $selectWhereId2->selectWhereId2($selectedValues);
//     $row = mysqli_fetch_array($sql);
//     $data[] = $row;
//     echo json_encode($data);
// }
