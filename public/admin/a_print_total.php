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


<body>

    <div class="BoxTable">
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <div class="row">
                <form name="frmSearch" method="GET" action="">
                    <table width="500" border="0">
                        <tr>
                            <th>
                                <input type="date" name="txt_keyword" id="txt_keyword" value="<?php echo $search_text; ?>">
                                <input type="date" name="txt_keyword1" id="txt_keyword1" value="<?php echo $search_text1; ?>">
                                <input type="submit" id="hid1" value="ค้นหา" />
                            </th>
                        </tr>
                    </table>
                </form>
                <?php
                $search_text = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
                $search_text1 = isset($_GET['txt_keyword1']) ? $_GET['txt_keyword1'] : '';
                $data = array();
                $sql = "SELECT  *, DATE_FORMAT(bk_time, '%d / %m / %Y') bk_date,DATE_FORMAT(br_time, '%d / %m / %Y') borrow_date
FROM ceitdb.`borrow` left join ceitdb.itemdata on borrow.id = itemdata.id left join ceitdb.user on borrow.user_id = user.user_id 
left join ceitdb.back on borrow.br_id = back.br_id
where borrow.status = 1 AND br_time between '" . $search_text . "' and  '" . $search_text1 . "' or br_time LIKE '%$search_text%'and br_time LIKE '%$search_text1%'";
                if ($result = $con->query($sql)) {
                    //printf("Select returned %d rows.\n", $result->num_rows);
                    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                        //print_r($row);echo '<br>';
                        $data[] = $row;
                    }
                    /* free result set */
                    $result->close();
                }
                $con->close();
                //echo '<pre>', print_r($data, true), '</pre>';
                ?>

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
                        <u>
                            <center>
                                <p id="p1">บุคลากรที่ยืมอุปกรณ์: ระหว่างวันที่
                                    <?php
                                    if (isset($_GET['txt_keyword']) < 01 / 01 / 2001) {
                                        echo " - ";
                                    } else {
                                        echo date('d/m/Y', strtotime($_GET['txt_keyword']));
                                    } ?>
                                    ถึงวันที่
                                    <?php
                                    if (isset($_GET['txt_keyword1']) < 01 / 01 / 2001) {
                                        echo " - ";
                                    } else {
                                        echo date('d/m/Y', strtotime($_GET['txt_keyword1']));
                                    } ?>
                            </center>
                            </p>
                        </u>
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
                                            <th>วันที่คืน</th>
                                            <th>คืนครุภัณฑ์ล่าช้า</th>
                                            <th>รายงานปัญหา</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($data as $row) {
                                            $i++;
                                        ?>
                                            <tr>

                                                <td data-label="ลำดับที่."><?php echo $i ?></td>
                                                <td data-label="ชื่อ - นามสกุล."><?php echo $row['fname'] . " " . $row['lname']  ?></td>
                                                <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                                <td data-label="สถานที่."><?php echo $row['location'] ?></td>
                                                <td data-label="วันที่ยืม."><?php echo $row['borrow_date'] ?></td>
                                                <td data-label="วันที่คืน."><?php echo $row['bk_date'] ?></td>
                                                <td data-label="คืนครุภัณฑ์ล่าช้า.">
                                                    <?php
                                                    $datestart = $row["br_date"];
                                                    $dateend = $row["bk_date"];

                                                    $calculate = strtotime("$datestart") - strtotime("$dateend");
                                                    $sumdate1 = floor($calculate / 86400); // 86400 มาจาก 24*360 (1วัน = 24 ชม.);

                                                    $sm1 = $sumdate1;
                                                    if ($sm1 >= 500) {
                                                        echo "-";
                                                    } elseif ($sm1 <= 0) {
                                                        echo $sm1;
                                                        echo ' วัน';
                                                    } else {
                                                        echo $sm1;
                                                        echo ' วัน';
                                                        echo "</td> ";
                                                    }
                                                    ?>
                                                </td>
                                                <td data-label="กำหนดคืน."><?php echo $row['bk_problem'] ?></td>

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