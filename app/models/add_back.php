<?php
require_once "function.php";

session_start();

if (isset($_POST['submit'])) {
    $itemcode = $_POST['data4'];

    $arr_code = explode(",", $itemcode);

    $total_rows = count($arr_code);

    if ($total_rows > 0) {
        for ($i = 0; $i < $total_rows; $i++) {
            $insertBack = new DB_con();
            $sql = $insertBack->insertBack($arr_code[$i]);
        }

        if ($sql) {
            $insertBack = new DB_con();
            $sql = $insertBack->updateStatusBorrow();
            if ($sql) {

                //after insert or update 
                $_SESSION['status'] = "คืนครุภัณฑ์สำเร็จ";
                header("location: /public/back_user.php");
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
                echo "พังงง UPDATE";
            }
        } else {
            echo "พังงง000";
        }
    } else {
?><script>
            alert('No data');
        </script><?php
                }
            } else {
                echo "พัง";
            }
