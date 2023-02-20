<?php
require_once "function.php";

session_start();
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['id_login'];

    $item_id = $_POST['activity'];
    $rp_activity = $_POST['location'];
    $problem = $_POST['date'];



            $insertRepair = new DB_con();
            $sql = $insertRepair->insertRepair($user_id, $item_id, $rp_activity, $problem);


        if ($sql) {
            $_SESSION['success'] = "แจ้งซ่อมครุภัณฑ์สำเร็จ!";
            header("location: /public/index.php");
            // foreach ($arr_code as $v) {
            //     print $v;
            //     echo "<br>";
            // }
            // echo "count : " . $total_rows . "<br>";
            // echo gettype($arr_code) . "<br>";
            // print_r (explode(",",$id)) . "<br>";
            // echo $id . "<br>";
            // echo $activity . "<br>";
            // echo $location . "<br>"; 
            // echo $br_date . "<br>";
        } else {
            $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: /public/borrow_user.php");
        }
    }
