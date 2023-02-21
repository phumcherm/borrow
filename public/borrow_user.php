<? session_start(); ?>
<?php
require_once "../app/models/function.php";
require_once "../app/models/db.php";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$num_par_page = 10;
$start_from = ($page - 1) * 49;


$query = "SELECT * FROM itemdata limit $start_from,$num_par_page";
$result_l = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยืมวัสดุ ครุภัณฑ์</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/table.css"> -->
    <link rel="stylesheet" href="css/grid.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    input {
        border-radius: 7px;
        border: none;
        width: auto;
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
        background-color: #ff5722;
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
    }

    @media all and (max-width: 800px) {
        .section_area_grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .table {
            display: none;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
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
</style>

<body>
    <?php
    include "nav_user.php";
    require_once "../app/views/session_status.php";
    ?>
    <!-- <button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button> -->
    <!--    background-color: #827A7A; -->
    <div>
        <div id="grad" style=" width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">

            <p style="float: right;">
                <?php echo $_SESSION['fname_login'] . " " . $_SESSION['lname_login'] ?>
            </p>
            <h2 style="color: #fff;font-family: SUT_Bold; text-shadow:2px 3px 10px #000; ">
                <i class="fa fa-caret-right" style="font-size:48px  "></i>ยืมครุภัณฑ์
            </h2>
            <br><br>
            <!--   1300px -->
            <!--  <div style="max-width: auto; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;"> -->
            <!--   <h3 style="color: #fff;font-family: SUT_Bold;"><i class="far fa-edit"></i>ทำรายการ</h3> -->
            <form action="../app/models/add_borrow.php" method="post">
                <? require "../app/controller/scaner.php" ?>
                <!-- <center><a href="#"> Scan QR Code</a></center> -->
                <?
                // echo $itemCode;
                // if (isset($_GET['code'])) {
                //     echo $_GET['code'];
                // } 
                ?>
                <br>
                <br>

                <!--  </div> -->
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
                                <td colspan="10" class="text-center">แสกน QR Code ยืมครุภัณฑ์</td>
                            </p>
                        </tbody>
                    </table>
                </div>

                <center>
                    <input class="w3-input" type="text" required placeholder="code" id="data4" name="data4" style="max-width: 500px;visibility: hidden; ">
                    <!-- <h2 id="data4" name="data4">
                        </h2> -->
                    <!-- <h2 id="result" ></h2> -->
                    <!-- <br><br> -->
                    <!--  //<h2 id="data4" name="data4"></h2>
                        //<h2 id="result" ></h2>
                       // <br><br> -->
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                        <input class="w3-input" type="text" required placeholder="ระบุงานที่จะนำไปใช้ทำกิจกรรม" id="activity" name="activity" style="max-width: 500px; box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px;">
                    </div>

                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                        <div class="section_area_grid">

                            <div class="section_grid_bor">
                                <div class="section_grid_item">
                                    <!--        //<h5 style="padding-left: 0;">ระบุสถานที่<h5> -->
                                    <!-- <br> -->
                                    <!-- <h6 style="visibility: hidden;">c</h6> -->
                                    <!-- <br> -->
                                    <div style="font-size: 25px;visibility: hidden;">ระบุสถานที่*</div>
                                    <input class="w3-input w3-animate-input demo" id="location" name="location" type="text" required placeholder="ระบุสถานที่" style="max-width: 400px; box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px; ">

                                </div>
                            </div>
                            <div class="section_grid_bor">
                                <div class="section_grid_item">
                                    <div style="font-size: 25px;">วันที่คืน*</div>
                                    <input class="w3-input " style="max-width: 400px; box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px; " type="date" id="date" name="date" required>
                                    <!-- <input class="w3-input" type="text" required placeholder="ระบุงานที่จะนำไปใช้ทำกิจกรรม" id="activity" name="activity" style="max-width: 500px; box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px;"> -->

                                </div>
                            </div>

                        </div>

                    </div>
                    <!--    // <p id="demo">CODE</p> -->
                    <br>
                    <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                        <div class="section_area_grid">

                        </div>
                    </div>
                </center>
                <br><br>

                <!--  <div style="max-width: auto;  margin: 15px auto 15px auto;background-color: rgba(255, 255, 255, 0.4);border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;"> -->

                <script>
                    function delAll_test() {
                        // document.getElementById("data4").innerHTML = code234
                        // console.log(code234)
                        itemCode.length = 0
                        console.log("del = " + itemCode)
                        tableFunc()
                    }
                </script>
                <br>
                <div style="max-width: 500px;margin: auto;">

                    <a type="button" id="cancle" onclick="delAll_test()">ยกเลิก</a>
                    <button type="submit" id="submit" name="submit">ยืนยันทั้งหมด</button>
                </div>

                </table>

            </form>
            <!-- </div> -->
            <br>

        </div>
    </div>
    </form>
    <!-- </div> -->
    <br>
</body>

</html>