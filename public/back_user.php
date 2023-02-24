<?php
require_once "../app/models/db.php"; ?>
<?php
require_once "../app/models/function.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คืนวัสดุ ครุภัณฑ์</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--     <link rel="stylesheet" href="css/table.css"> -->

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    input {
        border-radius: 7px;
        border: none;
        width: 200px;
        height: 40px;
        padding: 20px;
        margin: 15px auto 15px auto;
        text-align: center;
    }

    .blocktext {
        margin-left: auto;
        margin-right: auto;
        width: auto;
    }

    center a {
        background-color: #ff5722;
        color: white;
        padding: 15px 10px;
        margin-top: 15px;
        text-decoration: none;
        border-radius: 7px;
    }

    button {
        color: white;
        background-color: #ff5722;
        padding: 15px;
        border: none;
        border-radius: 7px;
    }

    a {
        color: white;
    }

    #cancle {
        color: red;
        border-style: solid;
        border-color: #ff0000;
        border-width: 5px;
        padding: 15px 25px;
        background-color: #fff;
        border-radius: 7px;
        margin-bottom: 15px;
        box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px;
    }

    #submit {
        float: right;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;
        border-radius: 10px;
    }

    @media all and (max-width: 800px) {
        .section_area_grid {
            grid-template-columns: 1fr;
        }
    }

    #grad {
        background: #827A7A;
        /* For browsers that do not support gradients */
        background: -webkit-linear-gradient(left top, #4F4848, #686060, #827A7A, #CFC7C7);
        /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(bottom right, #4F4848, #686060, #827A7A, #CFC7C7);
        /* For Opera 11.1 to 12.0 */
        background: -o-linear-gradient(bottom right, #4F4848, #686060, #827A7A, #CFC7C7);
        /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(bottom right, #4F4848, #686060, #827A7A, #CFC7C7);
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(to bottom right, #4F4848, #686060, #827A7A, #CFC7C7);
        /* Standard syntax */
    }

    .graphBox {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;

        grid-gap: 20px;
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
        grid-template-columns: 2fr 2fr;
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
</style>

<body>
    <?php
    include "nav_user.php";
    require_once "../app/views/session_status.php";
    ?>
    <?php

    if (isset($_SESSION['status'])) {
    ?>
        <div class="alert alert-warning bg-success alert-dismissible fade show" role="alert">
            <h1>
                Hey !<?= $_SESSION['status']; ?>
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">ปิด</button>
        </div>
    <?php
        unset($_SESSION['status']);
    }

    ?>
    <div>
        <div id="grad" style="background-color: #827A7A;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">


            <h2 style="color: #fff;font-family: SUT_Bold; text-shadow:2px 3px 10px #000; ">
                <i class="fa fa-caret-right" style="font-size:48px"></i> &nbsp;&nbsp;&nbsp;คืนครุภัณฑ์
            </h2>
            <form action="../app/models/add_back.php" method="post">
                <? require "../app/controller/scaner.php" ?>
                <!-- <center><a href="#"> Scan QR Code</a></center> -->
                <?
                // echo $itemCode;
                // if (isset($_GET['code'])) {
                //     echo $_GET['code'];
                // } 
                ?>

                <center>
                    <input class="w3-input" type="text" required placeholder="code" id="data4" name="data4" style="max-width: 500px;visibility: hidden; ">
                    <!-- <h2 id="data4" name="data4"></h2> -->
                    <!-- <h2 id="result" ></h2> -->
                    <!-- <br><br> -->
                </center>
                <br><br>
                <div class="graphBox">
                    <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
                        <div class="table-container">
                            <table id="datatable" class="table" sstyle="text-align: center;">

                        <div style="max-width: 1600px;margin-left: auto;">
                    <!-- <h2 style="padding-left: 200px;">รายละเอียดการยืม</h2> -->
                    <table id="datatable" class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                        <thead class="table-dark">
                            <th>
                                <center>id </center>
                            </th>
                            <!-- <th>
                                <center>updateTime</center>
                            </th> -->
                            <th>
                                <center>itemCode</center>
                            </th>
                            <th>
                                <center>detail</center>
                            </th>
                            <!-- <th>
                                <center>checkInDate</center>
                            </th> -->
                            <th>
                                <center>brand</center>
                            </th>
                            <!-- <th>
                                <center>serialNumber</center>
                            </th> -->
                            <!-- <th>
                                <center>price</center>
                            </th> -->
                            <!-- <th>
                                <center>refDoc</center>
                            </th> -->
                            <th>
                                <center>room</center>
                            </th>
                            <th>
                                <center></center>
                            </th>
                        </thead>
                        <tbody id="data">
                            <p>
                                <td colspan="10" class="text-center">แสกน QR Code คืนครุภัณฑ์</td>
                            </p>
                        </tbody>
                    </table>
                </div>

                            <script>
                                function delAll_test() {
                                    // document.getElementById("data4").innerHTML = code234
                                    // console.log(code234)
                                    itemCode.length = 0
                                    console.log("del = " + itemCode)
                                    tableFunc()
                                }
                            </script>
                            <br><br>
                            <center>
                                <input class="w3-input" type="text" placeholder="ปัญหาในการใช้งาน" id="problem" name="problem" style="max-width: 500px; box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px;">
                            </center>
                            <br>
                            <a type="button" id="cancle" onclick="delAll_test()">ยกเลิก</a>
                            <button type="submit" id="submit" name="submit">ยืนยันทั้งหมด</button>

                        </table>
                    </div>
                </div>
            </form>
            <!--  </div> -->
            <br>
        </div>
    </div>
</body>

</html>