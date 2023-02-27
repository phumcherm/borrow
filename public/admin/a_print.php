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
    <title>Admin borrow</title>
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

    .graphBox {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        grid-gap: 30px;
        min-height: 200px;
    }

    .graphBox .box {
        position: relative;
        background: #fff;
        padding: 20px;
        width: 100%;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
    }

    .BoxTable {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: 2fr;
        grid-gap: 30px;
        min-height: 200px;
    }

    .BoxTable .boxt {
        position: relative;
        background: #fff;
        padding: 20px;
        width: 100%;
        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
        border-radius: 20px;
    }

    @media(max-width: 991px) {
        .graphBox {
            grid-template-columns: 1fr;
            height: auto;
        }
    }

    #checkbox_1 {
        accent-color: #E6581D;
    }

    input.larger {
        width: 20px;
        height: 20px;
    }


    #text {

        color: #E6581D;
        border-style: solid;
        border-color: #E6581D;
        border-width: 3px;
        padding: 10px 10px;
        background-color: #fff;
        border-radius: 5px;
        float: right;
        margin-right: 50px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;
    }

    #text2 {
        color: #fff;
        border-style: solid;
        border-color: #E6581D;
        border-width: 3px;
        padding: 10px 10px;
        background-color: #E6581D;
        border-radius: 5px;
        float: right;
        margin-right: 50px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;
    }
</style>
<style type="text/css">
    @media print {
        #hid {
            display: none;
            /*
             ซ่อน  */
        }

        #hid1 {
            display: none;
            /* ซ่อน  */
        }

        #txt_keyword {
            display: none;
            /* ซ่อน  */
        }

        #txt_keyword1 {
            display: none;
            /* ซ่อน  */
        }

        #text {
            display: none;
            /* ซ่อน  */
        }

        #img {
            width: 1500px;
        }

        #p {
            font-size: 24px;

        }

        #p1 {
            font-size: 24px;

        }

        #data {
            font-size: 18px;
        }
    }
</style>


<body>
    <?php include 'a_navbar.php' ?>
    <div>
        <h2 id="hid" style="color: #E6581D;font-family: SUT_Bold; text-shadow:2px 3px 10px #686060; ">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-caret-right" style="font-size:48px"></i>&nbsp; พิมพ์รายงานครุณภัณฑ์
        </h2><br>
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