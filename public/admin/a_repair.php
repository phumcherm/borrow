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
    #search {
        width: 30%;
        padding: 12px 10px;
        background-color: transparent;
        transition: transform 250ms ease-in-out;
        font-size: 14px;
        line-height: 18px;
        border-radius: 50px;
        border: 1px solid #00009a;


    }
</style>

<body>
    <?php include 'a_navbar.php' ?>
    <div>
        <h2 style="color: #00009a;font-family: SUT_Bold;text-align: center;">
            ▶ รายการแจ้งซ้อมครุภัณฑ์
        </h2>
    </div>
    <br>
    <br>
    <center>
        <input type="search" id="search" onkeyup="SearchBox()" placeholder="ค้นหา" title="Type in a name">
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
                                <th>วันที่ยืม</th>
                                <th>วันที่คืน</th>
                                <th>สถานะ</th>
                                <th></th>

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
                                    <td data-label="วันที่ยืม."><!-- <?php /* echo $row['dateCreate'] */ ?> -->รอข้อมูลยืม</td>
                                    <td data-label="วันที่คืน."><span style="color: red;"><!-- <?php /* echo $row['Backdate']  */ ?> -->รอข้อมูลคืน</span> </td>
                                    <td data-label="สถานะ.">
                                        <p><a href="a_repair2.php" class="text-muted">รอดำเนินการ</a></p>
                                    </td>
                                    <td><a data-id="" href="" class="btn btn-warning">ข้อมูล</a></td>
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