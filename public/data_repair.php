<?php
require_once "../app/models/function.php";
if (isset($_GET['selectedActive'])) {
    $selectedActive = $_GET['selectedActive'];

    $selectActivity = new DB_con();
    $sql = $selectActivity->selectActivity($selectedActive);
    // $row = mysqli_fetch_array($sql);
    while ($row = mysqli_fetch_array($sql)) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    $data[] = "พังละ repair";
    echo json_encode($data);
}
