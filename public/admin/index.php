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
                        </thead>
                        <tbody>
                            <?php
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
                                                                echo "<p style='background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;'>ใช้งานได้</p>";
                                                            } elseif ($row['status'] == "ชำรุดรอการซ่อม") {
                                                                echo "<p style='background-color: #ffcc00;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;'>ชำรุดรอการซ่อม</p>";
                                                            } else {
                                                                echo "<p style='background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;'>" . $row['status'] . "</p>";
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