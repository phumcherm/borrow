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
    <!-- css datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <title>Report </title>
</head>
<style>
    /*chart */
    .graphBox {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: 2fr 2fr;
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
            <input type="date" id="start">
            <input type="date" id="end">
            <button class="btn btn-primary" type="button" onclick="fitterData()">ค้นหา</button>
            <!--  <button type="button" onclick="fittertem()">ค้นหา</button> -->
            <br><br>
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <input type="date" id="start_item">
            <input type="date" id="end_item">
            <button class="btn btn-primary" type="button" onclick="fitterItem()">ค้นหา</button>
            <br><br>
            <canvas id="myTest"></canvas>
        </div>
    </div>
    <!-- Table report -->
    <div class="BoxTable">
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <!-- <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายวัน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายเดือน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายปี</button> -->
            <br><br>
            <div class="table-container">
                <table class="table" id="dataSum">
                    <thead style="color:white;text-align: center; background-color:#E6581D;">
                        <tr>
                            <!-- <th>Id</th> -->
                            <th>รหัสครุภัณฑ์</th>
                            <th>ชื่ออุปกรณ์</th>
                            <th>ยี่ห่อ-รุ่น</th>

                            <th>จำนวนที่ถูกยืม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $selectAll = new DB_con();
                        $sql = $selectAll->selectSum();
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <!-- <td data-label="Id."><?php echo $row['id'] ?></td> -->
                                <td style="text-align: center;" data-label="รหัสครุภัณฑ์."><?php echo $row['id'] ?></td>
                                <td style="text-align: center;" data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                <td style="text-align: center;" data-label="ยี่ห่อ-รุ่น."><?php echo $row['brand'] ?></td>
                                <td style="text-align: center;" data-label="จำนวนการใช้."> <?php echo $row['COUNT'] ?></td>
                            </tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>
            </div>
        </div><!--  #E6581D; -->
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <!-- <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายวัน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายเดือน</button>
            <button style="background-color:#E6581D;  color:#fff;  border-color:#fff;border-radius: 7px;">รายปี</button> -->
            <br><br>
            <div class="table-container">
                <table class="table" id="dataAvg">
                    <thead style="color:white;text-align: center; background-color:#E6581D;">
                        <tr>
                            <!-- <th>Id</th>
                            <th>รหัสครุภัณฑ์</th> -->
                            <th>ชื่ออุปกรณ์</th>
                            <th>อัตราการใช้งาน</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $selectAll = new DB_con();
                        $sql = $selectAll->selectAvg();
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>

                            <tr>
                                <!-- <td data-label="Id."><?php echo $row['id'] ?></td>
                                <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td> -->
                                <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                <td data-label="อัตราการใช้งาน."><?php echo $row['avg'] ?> %</td>


                            </tr>
                    </tbody>
                <?php
                        }
                ?>
                </table>

            </div>
        </div>
    </div>

    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataSum').DataTable({

                scrollY: '250px',
                scrollCollapse: true,

                language: {
                    search: "ค้นหา :",
                    searchPlaceholder: "ค้นหา..."

                },
            });

        });

        $(document).ready(function() {
            $('#dataAvg').DataTable({

                scrollY: '250px',
                scrollCollapse: true,

                language: {
                    search: "ค้นหา :",
                    searchPlaceholder: "ค้นหา..."

                },
            });

        });
    </script>
    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="chart_data.js"> </script>
    <!-- ///// -->
</body>

</html>