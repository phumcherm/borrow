<?php

session_start();

require_once "../../app/models/Database.php";
require_once "../../app/models/function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report </title>
</head>
<style>
    /*chart */
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
</style>

<body>
    <?php include 'a_navbar.php' ?>
    <!-- Add chart JS -->

    <div class="graphBox">
        <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <select required class="form-select col-12 form-control" aria-label="Default select example" name="num" id="num" style="border-color: #E6581D; box-shadow: rgba(0, 0, 0, 0.11) 0px 5px 5px  ;">

                <optgroup label="เลือกดูการใช้งาน">
                    <option id="y" value="">รายปี</option>
                    <option id="m" value="">รายเดือน</option>
                    <option id="d" value="">รายวัน</option>
            </select>
            <!--  <button type="button" onclick="fittertem()">ค้นหา</button> -->
            <br><br>
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <select required class="form-select col-12 form-control" aria-label="Default select example" name="txt_bed" style="border-color: #E6581D; box-shadow: rgba(0, 0, 0, 0.11) 0px 5px 5px  ;">
                <optgroup label="เลือกดูการใช้งาน">
                    <option id="y" value="">รายปี</option>
                    <option id="m" value="">รายเดือน</option>
                    <option id="d" value="">รายวัน</option>
            </select>
            <!--  <button type="button" onclick="fittertem()">ค้นหา</button> -->
            <canvas id="testChart"></canvas>
        </div>
    </div>
    <!-- Table report -->
    <div class="BoxTable">
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายวัน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายเดือน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายปี</button>
            <br><br>
            <div class="table-container">
                <table class="table" id="data">
                    <thead style="color:white;text-align: center; background-color:#E6581D;">
                        <tr>
                            <th>Id</th>
                            <th>รหัสครุภัณฑ์</th>
                            <th>ชื่ออุปกรณ์</th>
                            <th>อัตราการใช้งาน</th>

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
                                <td data-label="Id."><?php echo $row['id'] ?></td>
                                <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td>
                                <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                <td data-label="อัตราการใช้งาน.">28%</td>

                            </tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
            </div>
        </div><!--  #E6581D; -->
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายวัน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายเดือน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายปี</button>
            <br><br>
            <div class="table-container">
                <table class="table" id="data">
                    <thead style="color:white;text-align: center; background-color:#E6581D;">
                        <tr>
                            <th>Id</th>
                            <th>รหัสครุภัณฑ์</th>
                            <th>ชื่ออุปกรณ์</th>
                            <th>จำนวนการใช้งาน</th>
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
                                <td data-label="Id."><?php echo $row['id'] ?></td>
                                <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td>
                                <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                <td data-label="จำนวนการใช้."> 2 ครั้ง</td>
                            </tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
            </div>
        </div>
    </div>
    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="chart.js"></script>
    <!-- ///// -->
</body>

</html>