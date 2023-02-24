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
    <?php include 'a_navbar.php' ?>
    <div>
        <h2 id="hid" style="color: #E6581D;font-family: SUT_Bold; text-shadow:2px 3px 10px #686060; ">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-caret-right" style="font-size:48px"></i>&nbsp; พิมพ์รายงานครุณภัณฑ์
        </h2><br>

    </div>
    <form>
        <div align="center">
            <a type="submit" id="text" onclick="window.print();"><i class="fa fa-print"></i>พิมพ์รายงาน</a>
        </div>
    </form>
    <br>

    <div class="BoxTable">
        <div class="boxt" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <div class="row">
                <?php
                $search_text = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
                $search_text1 = isset($_GET['txt_keyword1']) ? $_GET['txt_keyword1'] : '';
                $data = array();
                $sql = "SELECT  *, DATE_FORMAT(bk_time, '%d / %m / %Y') bk_date,DATE_FORMAT(br_time, '%d / %m / %Y') borrow_date
FROM ceitdb.`borrow` left join ceitdb.itemdata on borrow.id = itemdata.id left join ceitdb.user on borrow.user_id = user.user_id 
left join ceitdb.back on borrow.br_id = back.br_id
where borrow.status = 1  between '" . $search_text . "' and  '" . $search_text1 . "' or br_time LIKE '%$search_text%'and br_time LIKE '%$search_text1%'";
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
                                    if ($_GET['txt_keyword'] < 01 / 01 / 2001) {
                                        echo " - ";
                                    } else {
                                        echo date('d/m/Y', strtotime($_GET['txt_keyword']));
                                    } ?>
                                    ถึงวันที่
                                    <?php
                                    if ($_GET['txt_keyword1'] < 01 / 01 / 2001) {
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
                                            <th>รายงานปัญหา</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php

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