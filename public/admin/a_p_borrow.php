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
    <link rel="stylesheet" type="text/css" href="print.css">
    <title>Admin borrow</title>
</head>
<style>
    @media print {
        #maxRows {
            display: none;
            /* ซ่อน  */
        }
    }
</style>

<body>
    <div class="BoxTable">
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <div class="row">
                <table id="datatableBorrow" width="300" border="0">
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
                                        <select name="state" id="maxRows" style="margin: 12px; border-color:#5B5B5B; border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px; ">
                                            <option value="5000">Show ALL Rows</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="70">70</option>
                                            <option value="100">100</option>
                                        </select>
                                    </ul>
                                </nav>
                            </div>
                        </th>
                    </tr>
                </table>
                <div class="col-md-12 ">
                    <div class="col-sm-2" align="right"> </div>
                    <div class="col-sm-12" align="left">
                        <div style="text-align: center;">
                            <img id="img" src="../../app/asset/ceit_logo1.jpg" style="width:100px;">
                        </div>
                        <br>
                        <p id="p" style="text-align: center;"> <b>ศูนย์นวัตรกรรมและเทคโนโลยีการศึกษา</b></p>
                        <p id="p1" style="text-align: center;">มหาวิทยาลัยเทคโนโลยีสุรนารี</p>
                        <p id="p1" style="text-align: center;">พิมพ์โดยคุณ: <?php echo $_SESSION['fname_login'] . " " . $_SESSION['lname_login'] ?></p>
                        <div>

                            <div class="table-container">
                                <table class="table" id="datatableBorrow" style="text-align: center;">
                                    <thead style="color:white; background-color:#E6581D;">
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>ชื่ออุปกรณ์</th>
                                            <th>สถานที่</th>
                                            <th>วันที่ยืม</th>
                                            <th>กำหนดวันคืน</th>
                                            <th>ผู้อนุมัติ</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $i = 0;
                                        $selectAll = new DB_con();
                                        $sql = $selectAll->dataBorrow();
                                        while ($row = mysqli_fetch_array($sql)) {
                                            $i++;
                                        ?>
                                            <tr>

                                                <td data-label="ลำดับที่."><?php echo $i ?></td>
                                                <td data-label="ชื่อ - นามสกุล."><?php echo $row['fname'] . " " . $row['lname']  ?></td>
                                                <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                                <td data-label="สถานที่."><?php echo $row['location'] ?></td>
                                                <td data-label="วันที่ยืม."><?php echo $row['borrow_date'] ?></td>
                                                <td data-label="กำหนดวันคืน."><?php echo $row['br_date'] ?></td>
                                                <td data-label="กำหนดคืน."> <?php echo $_SESSION['fname_login'] . " " . $_SESSION['lname_login'] ?></td>

                                            </tr>
                                    </tbody>
                                <?php
                                        }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="borrow_print.js"></script>


</body>

</html>