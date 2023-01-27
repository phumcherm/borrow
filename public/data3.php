<?php 
// if(isset($_GET['numb'])){
//     echo "นี่คือ : ". $_GET['numb'];
    
// }
// // echo "พัง";
// $temp = array("hello","world","5555");
// // $result = "'" . implode ( "', '", $temp ) . "'";
// // echo $result; // 'hello', 'world'
// echo ($temp); // 'hello', 'world'

if (isset($_GET['code'])) {
    $arr = $_GET['code'];
    // $itemCode = implode(', ', $arr);
    // $itemCode = implode("','", $arr);
    $temp = array("hello","world","5555");
    // $result = "'" . implode ( "', '", $arr ) . "'";

    // $selectWhereCode = new DB_con();
    // $sql = $selectWhereCode->selectWhereCode($arr);

    // while ($row = mysqli_fetch_array($sql)) {
    //     $data[] = $row;
    // }
//////////////////////////////////    No     ///////////////////////////////////////////
    // echo "นี่คือ : " . $itemCode;
    $xxx = $arr;
    $data[] = $xxx;
    // while ($temp) {
    //     $xxx = $temp;
    //     echo $data[] = $xxx;
    // }
    // echo json_encode($data1);
    echo json_encode($data);
} else {
    echo $data = "พังละ";
    // echo json_encode($data);
}
//////////////////////////////////////////////////////////////////////////////
?>