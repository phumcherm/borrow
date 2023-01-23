<? session_start(); ?><?php
                        /*  require_once "../app/models/Database.php"; */
                        require_once "../app/models/function.php";
                        $con = mysqli_connect("172.19.0.1:9906", "ceitdb", "12345678", "ceitdb");
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

    /* a:hover {
        background-color: #dbd6d6;
        color: white;
        text-decoration: none;
    }*/

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

    @media all and (max-width: 800px) {
        .section_area_grid {
            grid-template-columns: 1fr;
        }
    }

    /* center a:hover {
        background-color: #ffa185;
    } */
</style>

<body>
    <?php
    include "nav_user.php";
    ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button>
    <!-- <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button> -->


    <div>

        <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                <i class="fa fa-caret-right" style="font-size:48px"></i>ยืมวัสดุ ครุภัณฑ์
            </h2>
            <!--   1300px -->
            <div style="max-width: auto; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;">
                <h3 style="color: white;font-family: SUT_Bold;"><i class="far fa-edit"></i>ทำรายการ</h3>
                <form action="">
                    <? require "../app/controller/scaner.php" ?>
                    <!-- <center><a href="#"> Scan QR Code</a></center> -->
                    <?
                    // echo $itemCode;
                    if (isset($_GET['code'])) {
                        echo $_GET['code'];
                    } ?>
                    <br>
                    <br>

                    <center>
                        <input class="w3-input" type="text" required placeholder="ระบุงานที่จะนำไปใช้ทำกิจกรรม" style="max-width: 400px; box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px;">

                        <div class="section_area_grid">

                            <div class="section_grid_bor">
                                <div class="section_grid_item">
                                    <!-- <h5 style="padding-left: 0;">ระบุสถานที่<h5> -->
                                    <br>
                                    <input class="w3-input w3-animate-input  demo" type="text" required placeholder="ระบุสถานที่" style="max-width: 400px; box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px;">
                                </div>
                            </div>
                            <!-- <p id="demo">CODE</p> -->
                            <div class="section_grid_bor">
                                <div class="section_grid_item">
                                    <h5>วันที่คืน*</h5>
                                    <input class="w3-input w3-animate-input" style="max-width: 400px; box-shadow: rgba(0.35, 0, 0, 0.35) 0px 5px 10px;" type="date" id="date" name="date" required>
                                </div>
                            </div>
                        </div>
                    </center>

                    <div class="table-responsive">
                        <div style="width: 100%; height: 100%;margin-left: auto;">
                            <!-- <h2 style="padding-left: 200px;">รายละเอียดการยืม</h2> -->
                            <table class="table" style="width: 100%; height: 100%;margin: auto; padding: 16px;background-color: white;border-radius: 7px;">
                                <thead class="table-dark">
                                    <th>
                                        <center>id </center>
                                    </th>
                                    <th>
                                        <center>updateTime</center>
                                    </th>
                                    <th>
                                        <center>itemCode</center>
                                    </th>
                                    <th>
                                        <center>detail</center>
                                    </th>
                                    <th>
                                        <center>checkInDate</center>
                                    </th>
                                    <th>
                                        <center>brand</center>
                                    </th>
                                    <th>
                                        <center>serialNumber</center>
                                    </th>
                                    <th>
                                        <center>price</center>
                                    </th>
                                    <th>
                                        <center>refDoc</center>
                                    </th>
                                    <th>
                                        <center>room</center>
                                    </th>
                                    <!-- <th>
                <center>ลำดับ</center>
            </th>
            <th>
                <center>รายการ</center>
            </th>
            <th>
                <center>ห้อง-แผนก</center>
            </th>
            <th>
                <center>วันที่ยืม</center>
            </th>
            <th>
                <center>วันที่คืน</center>
            </th> -->
                                </thead>
                                <tbody id="data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <script>
                        var ajax = new XMLHttpRequest();
                        var method = "GET";
                        var url = "data.php";
                        var asynchronous = true;

                        ajax.open(method, url, asynchronous);
                        ajax.send();
                        ajax.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                var data = JSON.parse(this.responseText);
                                console.log(data);

                                var html = "";

                                for (var a = 0; a < data.length; a++) {
                                    var id = data[a].id;
                                    var updateTime = data[a].updateTime;
                                    var itemCode = data[a].itemCode;
                                    var detail = data[a].detail;
                                    var checkInDate = data[a].checkInDate;
                                    var brand = data[a].brand;
                                    var serialNumber = data[a].serialNumber;
                                    var price = data[a].price;
                                    var refDoc = data[a].refDoc;
                                    var room = data[a].room;

                                    html += "<tr>";
                                    html += "<td>" + id + "</td>";
                                    html += "<td>" + updateTime + "</td>";
                                    html += "<td>" + itemCode + "</td>";
                                    html += "<td>" + detail + "</td>";
                                    html += "<td>" + checkInDate + "</td>";
                                    html += "<td>" + brand + "</td>";
                                    html += "<td>" + serialNumber + "</td>";
                                    html += "<td>" + price + "</td>";
                                    html += "<td>" + refDoc + "</td>";
                                    html += "<td>" + room + "</td>";
                                    html += "</tr>";

                                }

                                document.getElementById("data").innerHTML = html;
                            }
                        }
                    </script>
                    <!-- <script>
                        $(document).ready(function() {

                            $.ajax({
                                type: "GET",
                                url: "data.php",
                                dataType: "json",
                                success: function(data) {
                                    $('#my-data').html(data);
                                }
                            });
                        });
                    </script> -->
                    <br>
                    <button type="submit">ยืนยันทั้งหมด</button>
                </form>
            </div>
            <br>

        </div>
    </div>
</body>


</html>