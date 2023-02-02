<?php
session_start();
require('../../app/models/Modelborrow.php');
require_once "../../app/models/Database.php";
require_once "../../app/models/function.php";

$con = mysqli_connect("172.19.0.1:9906", "ceitdb", "12345678", "ceitdb");
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
<<<<<<< HEAD
=======
    <title>E - Borrow || ADMIN</title>
>>>>>>> 905bad3efbeab67a54475a32be54aec9d4c9ebfc
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/borrow/public/css/style.css">
    <link rel="stylesheet" href="/borrow/public/css/icons.png">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: #dcdad8;">
            <li class="breadcrumb-item active"><a href="index.php">หน้าเเรก</a></li>
        </ol>
    </nav>

    <div>
        <h2 style="color: #E6581D;font-family: SUT_Bold;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-caret-right" style="font-size:48px"></i>&nbsp;รายการครุภัณฑ์
        </h2>
    </div>
    <br>
    <center>
        <input type="search" id="search" onkeyup="SearchBox()" placeholder="&nbsp;&nbsp;ค้นหา" title="Type in a name">
    </center>

    <br>
    <div class="table-responsive " style="padding: 25px;">
        <div>
            <div style="max-width: 1600px;margin-left: auto;">
                <div class="table-container">
                    <table class="table" id="data" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                        <thead style="color:white;text-align: center; background-color:#E6581D; ">
                            <tr>

                                <th>ID</th>
                                <th>รหัสครุภัณฑ์</th>
                                <th>ชื่ออุปกรณ์</th>
                                <th>ยี่ห้อ</th>
                                <th>สถานะ</th>
                                <th>เจ้าหน้าที่</th>

<<<<<<< HEAD
                            </tr>
=======
        <center>
            <input class="w3-input " type="text" id="myInput" onkeyup="myFunction()" placeholder="Search .." style="max-width: 100%; max-height: 100%;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;" title="Type in a name">
        </center>

        <div class='pagination-container'>
            <p Align=right>
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    <li data-page="prev" class="page-item">
                        <a class="page-link" href="#" style=" border-color:#827A7A; color:#000;">Previous
                            <span>
                                <span class="sr-only">(current)
                                </span></a>
                    </li>
                    <!--	Here the JS Function Will Add the Rows -->
                    <li data-page="next" class="page-item">
                        <a class="page-link" href="#" style=" border-color:#827A7A; color:#000;">Next
                            <span> <span class="sr-only">(current)</span></span></a>
                    </li>
                </ul>
            </nav>
            </p>
            <br><br><br>
            <p Align=right>
                <select name="state" id="maxRows" style=" border-color:#827A7A; box-shadow: 0px 0px 0px 6px rgba(255, 255, 255, 0.3); ">
                    <option value="5000">Show ALL Rows</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="70">70</option>
                    <option value="100">100</option>
                </select>
            </p>
        </div><br>

        <div class="table-responsive" style="padding: 25px;">
            <div>
                <table id="datatable" class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                    <div>


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
                            <th>
                                <center>status</center>
                            </th>
                            <!-- <th>
                     <center>status</center>
                 </th>
                 <th>
                     <center>notation</center>
                 </th>
                 <th>
                     <center>misConfirmer</center>
                 </th>
                 <th>
                     <center>organization</center>
                 </th>
                 <th>
                     <center>type</center>
                 </th>
                 <th>
                     <center>active</center>
                 </th> -->

>>>>>>> 905bad3efbeab67a54475a32be54aec9d4c9ebfc
                        </thead>
                        <tbody>
                            <?php
<<<<<<< HEAD
=======

>>>>>>> 905bad3efbeab67a54475a32be54aec9d4c9ebfc
                            $selectAll = new DB_con();
                            $sql = $selectAll->selectAll();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>

                                    <td data-label="Id."><?php echo $row['id'] ?></td>
                                    <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td>
                                    <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                    <td data-label="ยี่ห้อ."><?php echo $row['brand'] ?></td>
                                    <td data-label="สถานะ."><?php if ($row['status'] == "ใช้งานได้") {
                                                                echo "<p style='color:green;font-size:16px'>ใช้งานได้</p>";
                                                            } elseif ($row['status'] == "ชำรุดเพื่อรอการจำหน่าย") {
                                                                echo "<p style='color:red;font-size:16px'>ชำรุดเพื่อรอการจำหน่าย</p>";
                                                            } else {
                                                                echo $row['br_status'];
                                                            }  ?></td>
                                    <td data-label="เจ้าหน้าที่."><?php echo $row['notation'] ?></td>

                                <?php
                            }
                                ?>
                    </table>
                    <br>

                </div>
            </div>
        </div>


        <script>
            function SearchBox() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("search");
                filter = input.value.toUpperCase();
                table = document.getElementById("data");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td0 = tr[i].getElementsByTagName("td")[0];
                    td2 = tr[i].getElementsByTagName("td")[2];
                    td3 = tr[i].getElementsByTagName("td")[3];
                    if (td3 || td0 || td2) {
                        var td2Value = td2.textContent || td2.innerText;
                        var td3Value = td3.textContent || td3.innerText;
                        var td0Value = td0.textContent || td0.innerText;
                        if (td3Value.toUpperCase().indexOf(filter) > -1 || td0Value.toUpperCase().indexOf(filter) > -1 || td2Value.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }

                    }
                }
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>

</html>