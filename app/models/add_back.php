<?php
require_once "function.php";

session_start();

if (isset($_POST['submit'])) {
    $itemcode = $_POST['data4'];
    $user_id = $_SESSION['id_login'];
    $problem = $_POST['problem'];

    $arr_code = explode(",", $itemcode);

    $total_rows = count($arr_code);

    if ($total_rows > 0) {
        for ($i = 0; $i < $total_rows; $i++) {
            $insertBack = new DB_con();
            $sql = $insertBack->insertBack($arr_code[$i],$user_id,$problem);
        }

        if ($sql) {
            $insertBack = new DB_con();
            $sql = $insertBack->updateStatusBorrow();
            if ($sql) {

                //after insert or update 
                $_SESSION['success'] = "คืนครุภัณฑ์สำเร็จ!";
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
                echo "พังงง UPDATE";
            }
        } else {
            $_SESSION['error'] = "มีบางอย่างผิดพลาด";
            header("location: /public/back_user.php");
        }
    } else {
?><script>
            alert('No data');
        </script><?php
                }
            } else {
                echo "พัง";
            }
