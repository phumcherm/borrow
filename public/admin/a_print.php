<?php
session_start();
require_once "../../app/models/function.php";

require_once "../../app/models/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="print.css">
    <title>Admin borrow</title>
</head>

<body>
    <?php include 'a_navbar.php' ?>
    <div>
        <h2 id="hid" style="color: #E6581D;font-family: SUT_Bold; text-shadow:2px 3px 10px #686060; ">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-caret-right" style="font-size:48px"></i>&nbsp; พิมพ์รายงานครุณภัณฑ์
        </h2>
    </div>
    <form>
        <div align="center">
            <a id="hid" href="a_print.php?p=p_total" class="btn btn-primary"><i class="fa fa-print"></i> พิมพ์ยืม - คืนครุภัณฑ์</a>
            <a id="hid" href="a_print.php?p=p_borrow" class="btn btn-primary"><i class="fa fa-print"></i> พิมพ์ข้อมูลยืม</a>
            <a id="hid" href="a_print.php?p=p_back" class="btn btn-primary"><i class="fa fa-print"></i> พิมพ์ข้อมูลคืน</a>
            <a type="submit" id="text" onclick="window.print();"><i class="fa fa-print"></i>พิมพ์รายงาน</a>
        </div>
    </form>
    <br>
    <?php
    $p = (isset($_GET['p']) ? $_GET['p'] : '');
    if ($p == 'p_total') {
        include('a_print_total.php');
    } elseif ($p == 'p_borrow') {
        include('a_p_borrow.php');
    } elseif ($p == 'p_back') {
        include('a_p_back.php');
    } else {
        include('a_print_total.php');
    }
    ?>



</body>

</html>