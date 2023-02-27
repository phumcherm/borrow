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
        grid-template-columns: 2fr;
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


    #text {

        color: #E6581D;
        border-style: solid;
        border-color: #E6581D;
        border-width: 3px;
        padding: 10px 10px;
        background-color: #fff;
        border-radius: 5px;
        float: right;
        margin-right: 50px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;
    }

    #text2 {
        color: #fff;
        border-style: solid;
        border-color: #E6581D;
        border-width: 3px;
        padding: 10px 10px;
        background-color: #E6581D;
        border-radius: 5px;
        float: right;
        margin-right: 50px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 10px;
    }
</style>
<style type="text/css">
    @media print {
        #hid {
            display: none;
            /*
             ซ่อน  */
        }

        #hid1 {
            display: none;
            /* ซ่อน  */
        }

        #txt_keyword {
            display: none;
            /* ซ่อน  */
        }

        #txt_keyword1 {
            display: none;
            /* ซ่อน  */
        }

        #text {
            display: none;
            /* ซ่อน  */
        }

        #img {
            width: 1500px;
        }

        #p {
            font-size: 24px;

        }

        #p1 {
            font-size: 24px;

        }

        #data {
            font-size: 18px;
        }
    }
</style>


<body>



    <div class="BoxTable">
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <div class="row">

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
                                <table class="table" id="data" style="text-align: center;">
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

    <!-- js Bootstap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </div>



</body>

</html>