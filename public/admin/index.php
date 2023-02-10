<?php
session_start();

require_once "../../app/models/Database.php";
require_once "../../app/models/function.php";
require_once "../../app/models/db.php";
// if (!isset($_SESSION['admin_login'])) {
//     $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!!';
//     header("location: ./../login.php");
// }
// if (isset($_GET['logout'])) {
//     session_destroy();
//     unset($_SESSION['admin_login']);
//     header("location: ./../login.php");
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E - Borrow || ADMIN</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Borrow</title>
</head>
<style>
    #search {
        width: 50%;
        padding: 17px 10px;
        background-color: #fff;
        transition: transform 250ms ease-in-out;
        font-size: 20px;
        line-height: 18px;
        border-radius: 50px;
        border: 1px solid #E6581D;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

    }
</style>


<body>
    <?php include 'a_navbar.php' ?>

    <div>
        <h2 style="color: #E6581D;font-family: SUT_Bold;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <i class="fa fa-caret-right" style="font-size:48px"></i> รายการครุภัณฑ์
        </h2>
    </div>
    <br>
    <?php include 'dashboard.php' ?>
    <br>
    <?php

    $p = (isset($_GET['p']) ? $_GET['p'] : '');
    if ($p == 'itemdata') {
        include('a_fuctionTable.php');
    } elseif ($p == 'borrow') {
        include('a_fuctionBorrow.php');
    } elseif ($p == 'back') {
        include('a_fuctionBack.php');
    } elseif ($p == 'status') {
        include('a_fuctionStatus.php');
    } elseif ($p == 'repair') {
        include('a_fuctionRepair.php');
    } elseif ($p == 'stock') {
        include('a_fuctionStock.php');
    } elseif ($p == 'office') {
        include('a_fuctionOffice.php');
    } elseif ($p == 'user') {
        include('a_fuctionUser.php');
    } else {
        include('a_fuctionTable.php');
    }
    ?>


</body>

</html>