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

    #checkbox_1 {
        accent-color: #E6581D;
    }

    input.larger {
        width: 20px;
        height: 20px;
    }
    #submit {
        float: right;
       
        box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;
    }
    
    #text {
        color: #E6581D;
        border-style: solid;
        border-color: #ff0000;
        border-width: 3px;
        padding: 10px 10px;
        background-color: #fff;
        border-radius: 5px;
        float: right;
        margin-right: 50px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;
    }

   
</style>

<body>
    <?php include 'a_navbar.php' ?>
    <div>
        <h2 style="color: #E6581D;font-family: SUT_Bold; text-shadow:2px 3px 10px #686060; ">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-caret-right" style="font-size:48px"></i>&nbsp; แจ้งซ่อมครุภัณฑ์
        </h2><br>
       
    </div>
    <form>
    <div align="center">
    <a href="a_repair2.php"  type="submit" id="text" ><b>สถานะการแจ้งซ่อมครุภัณฑ์<b></a>
	</div>
</form>
    <br>
    <div class="BoxTable">
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <div class="table-container">
                <table class="table" id="data">
                    <thead style="color:white;text-align: center; background-color:#E6581D;">
                        <tr>
                            <th>Select</th>
                            <th>Id</th>
                            <th>หมายเลขครุภัณฑ์</th>
                            <th>ชื่ออุปกรณ์</th>
                            <th>วันที่แจ้งซ่อม</th>
                            <th>สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $selectAll = new DB_con();
                        $sql = $selectAll->selectAll();
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                            <!--   $back = new Borrow();
                        $sql = $back->fetch_back();
                        foreach ($sql as $row) {
                        ?> -->
                            <tr>
                                <th><input class="form-check-input" type="checkbox"></th>
                                <td data-label="Id."><?php echo $row['id'] ?></td>
                                <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td>
                                <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                <td data-label="วันที่แจ้งซ่อม."><!-- <?php /* echo $row['dateCreate'] */ ?> -->รอข้อมูลวันที่</td>
                                <td data-label="สถานะ.">
                                    <p><a href="a_repair2.php" class="text-muted">รอดำเนินการ</a></p>
                                </td>

                            </tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
            </div>
        </div><!--  #E6581D; -->
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">

            <div class="container">
                <div class="card-panel row">
                    <div class="col">
                        <fieldset>
                            <legend>Checkboxes</legend>
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="form-check-label">
                                                <input type="checkbox" id="checkbox_1" class="larger">
                                                <span class="check"></span>
                                                First checkbox
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label class="form-check-label">
                                                <input type="checkbox" id="checkbox_1" class="larger">
                                                <span class="check"></span>
                                                Second checkbox
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
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


    <!-- js Bootstap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </div>



</body>

</html>