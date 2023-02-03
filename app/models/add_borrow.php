<?php
require_once "function.php";

if (isset($_POST['submit'])) {
    $itemcode = $_POST['data4'];
    $activity = $_POST['activity'];
    $location = $_POST['location'];
    $br_date = $_POST['date'];

    $arr_code = explode(",", $itemcode);

    $total_rows = count($arr_code);

    if ($total_rows > 0) {
        for ($i = 0; $i < $total_rows; $i++) {
            $insertBorrow = new DB_con();
            $sql = $insertBorrow->insertBorrow($arr_code[$i], $activity, $location, $br_date);
        }

        if ($sql) {
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
