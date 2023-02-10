<?php
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
<<<<<<< HEAD
    #search {
=======
      #search {
>>>>>>> 40c557a2107a79cb1ce49fbb7e378ccc6f168b39
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
<<<<<<< HEAD
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-caret-right" style="font-size:48px"></i>&nbsp; แจ้งซ่อมครุภัณฑ์
=======
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <i class="fa fa-caret-right" style="font-size:48px"></i> รายการแจ้งซ่อมครุภัณฑ์
>>>>>>> 40c557a2107a79cb1ce49fbb7e378ccc6f168b39
        </h2>
    </div>
    <br>
    <center>
        <input type="search" id="search" onkeyup="SearchBox()" placeholder="&nbsp;&nbsp;ค้นหา" title="Type in a name">
    </center>

    <div class="table-responsive " style="padding: 25px;">
        <div>
            <div style="max-width: 1600px;margin-left: auto;">
                <div class="table-container">
                    <table class="table" id="data" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                        <thead style="color:white;text-align: center; background-color:#E6581D; ">
                            <tr>
                                <th>Id</th>
                                <th>หมายเลขครุภัณฑ์</th>
                                <th>ชื่ออุปกรณ์</th>
                                <th>วันที่แจ้งซ่อม</th>
                                <th>สถานะ</th>
                                <th>รายละเอียดเพิ่มเติม</th>

                            </tr>
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
                                    <td data-label="วันที่แจ้งซ่อม."><!-- <?php /* echo $row['dateCreate'] */ ?> -->รอข้อมูลวันที่</td>
                                    <td data-label="สถานะ.">
                                        <p><a href="a_repair2.php" class="text-muted">รอดำเนินการ</a></p>
                                    </td>
                                    <td><a data-id="" href="detailrepair.php" class="btn btn-warning">ข้อมูล</a></td>
                                </tr>
                        </tbody>
                    <?php
                            }
                    ?>
                    </table>
                    <br>

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


            <!-- js Bootstap -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>