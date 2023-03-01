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
            <input type="search" id="search" onkeyup="SearchTable()" placeholder="&nbsp;&nbsp;ค้นหา" title="Type in a name" style="text-align: center; margin: 16px; padding: 5px; border-radius: 50px; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px; ">
            <select name="state" id="maxRows" style="text-align: center;  border-color:#5B5B5B; border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px; ">
                <option value="5000">Show ALL Rows</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            <div class="table-container">
                <table id="datatableReport1" class="table">
                    <thead style="color:white;text-align: center; background-color:#E6581D;">
                        <tr>
                            <th>วันที่</th>
                            <th>ชื่ออุปกรณ์</th>
                            <th>ยี่ห่อ-รุ่น</th>
                            <th>จำนวน</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;

                        $selectAll = new DB_con();
                        $sql = $selectAll->selectSum();
                        while ($row = mysqli_fetch_array($sql)) {
                            $i++;
                        ?>
                            <tr>
                                <td style="text-align: center;" data-label="รหัสครุภัณฑ์."><?php echo $row['time'] ?></td>
                                <td style="text-align: center;" data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                <td style="text-align: center;" data-label="ยี่ห่อ-รุ่น."><?php echo $row['brand'] ?></td>
                                <td style="text-align: center;" data-label="จำนวน."> <?php echo $row['COUNT'] ?> ครั้ง</td>
                            </tr>
                    </tbody>
                <?php
                        }
                ?>

                </table>
                <table width="350" border="0">
                    <tr>
                        <th>
                            <div class='pagination-container'>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li data-page="prev" class="page-item">
                                            <a id="hid1" class="page-link" href="#" style=" border-color:#5B5B5B; color:#434242; "><b><i class="fas fa-angle-left"></i>Previous</b>
                                                <span>
                                                    <span class="sr-only">(current)
                                                    </span></a>
                                        </li>
                                        <li data-page="next" class="page-item">
                                            <a id="hid1" class="page-link" href="#" style=" border-color:#5B5B5B; color:#434242;"><b>Next&nbsp;&nbsp;<i class="fas fa-angle-right"></i></b>
                                                <span> <span class="sr-only">(current)</span></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </th>
                    </tr>
                </table>
            </div>
        </div><!--  #E6581D; -->
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <div class="table-container">
                <table id="datatableReport1" class="table">
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
    <!-- js nextpadge -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="report_table.js"></script>
    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="chart.js"> </script>
    <!-- ///// -->
</body>

</html>