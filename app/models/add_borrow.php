<?php
require_once "function.php";

session_start();
if (isset($_POST['submit'])) {
    $itemcode = $_POST['data4'];
    $user_id = $_SESSION['id_login'];

    $activity = $_POST['activity'];
    $location = $_POST['location'];
    $br_date = $_POST['date'];

    $arr_code = explode(",", $itemcode);

    $total_rows = count($arr_code);

    if ($total_rows > 0) {
        for ($i = 0; $i < $total_rows; $i++) {
            $CheckBeforeInsBorrow = new DB_con();
            $sql = $CheckBeforeInsBorrow->CheckBeforeInsBorrow($arr_code[$i]);
            $row = mysqli_fetch_array($sql);
            if ($row <= 0) {
                $insertBorrow = new DB_con();
                $sql = $insertBorrow->insertBorrow($arr_code[$i], $user_id, $activity, $location, $br_date);
                if ($sql) {
                    $_SESSION['success'] = "ยืมครุภัณฑ์สำเร็จ!";
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
            } else {
                
                $_SESSION['error'] = "ครุภัณฑ์ $arr_code[$i] กำลังถูกยืมอยู่";
                header("location: /public/index.php");
            }
        }
    } else {
?><script>
            alert('No data');
        </script><?php
                }
            } else {
                echo "พัง";
            }
