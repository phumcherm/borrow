<?php

session_start();
require_once "../app/models/function.php";
require_once "../app/models/db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
<!--     <link rel="stylesheet" href="css/table.css"> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/icons.png');
            background-position: 2px 5px;
            background-repeat: no-repeat;
            height: 20%;
            width: 50%;
            font-size: 20px;
            padding: 5px 5px 5px 5px;
           
            margin-bottom: 30px;
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 6px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
        
            color: black;
            display: block
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }


        .pagination li:hover {
            cursor: pointer;
        }

        #grad {
            background: #827A7A;
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #4F4848, #686060, #827A7A, #CFC7C7);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #4F4848, #686060, #827A7A, #CFC7C7);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #4F4848, #686060, #827A7A, #CFC7C7);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #4F4848, #686060, #827A7A, #CFC7C7);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #4F4848, #686060, #827A7A, #CFC7C7);
            /* Standard syntax */
        }
   .graphBox {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;

        grid-gap: 20px;
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

</head>

<body>
    <?php
    include "nav_user.php";
    ?>
    <div id="grad" style="background-color:#827A7A;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
        <div>
            
            <h2 style="color: #fff;font-family: SUT_Bold;  text-shadow:2px 3px 10px #000;">
                <i class="fa fa-caret-right" style="font-size:48px"></i>&nbsp;&nbsp;&nbsp;รายการครุภัณฑ์

            </h2>
        </div>
        <br>
        <center>
            <input class="w3-input " type="text" id="myInput" onkeyup="myFunction()" placeholder="Search .." style="margin: 15px;border-radius: 50px;padding: 13px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;" title="Type in a name">
        </center>
        <br>
         <div class="graphBox">
                    <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
                       
        <div class="table-container">
            <div>
                <table id="datatable" class="table" style="text-align: center;">
                        <thead style="color:white; background-color:#E6581D; ">
                            <th>
                                <center>ชื่อครุภัณฑ์</center>
                            </th>
                            <th>
                                <center>ยี่ห้อ/รุ่น</center>
                            </th>
                            <th>
                                <center>จำนวน</center>
                            </th>
                            <th>
                                <center>สถานะการยืม</center>
                            </th>
                            <th>
                                <center>สถานะการใช้งาน</center>
                            </th>
                        </thead>

                        <tbody>
                            <?php
                            $selectCountTreasury = new DB_con();
                            $sql = $selectCountTreasury->selectCountTreasury();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <td data-label="ชื่อครุภัณฑ์.">
                                    <center><?php echo $row["detail"] ?></center>
                                </td>
                                <td data-label="ยี่ห้อ.">
                                    <center> <?php echo $row["brand"] ?></center>
                                </td>
                                <td data-label="จำนวน.">
                                    <center><?php echo $row["total"] ?></center>
                                </td>
                                <td data-label="สถานะการยืม.">
                                    <center>
                                        <?php if ($row['br_status'] == '') { ?>
                                            <!-- <center> <?php echo $row["br_status"] ?></center> -->
                                            <p style="background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">ว่าง</p>
                                        <?php } elseif ($row['br_status'] == 0) { ?>
                                            <p style="background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">ไม่ว่าง</p>
                                        <?php } else { ?>
                                            <p style="background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">ว่าง</p>
                                        <?php } ?>
                                    </center>
                                </td>
                                <td data-label="สถานะการใช้งาน.">
                                    <center><?php if ($row['item_status'] == "ใช้งานได้") {
                                                echo "<p style='background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;'>ใช้งานได้</p>";
                                            } elseif ($row['item_status'] == "ชำรุดรอการซ่อม") {
                                                echo "<p style='background-color: #ffcc00;padding: 5px 10px;color: black;border-radius: 7px;margin: 0px;'>ชำรุดรอการซ่อม</p>";
                                            } else {
                                                echo "<p style='background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;'>" . $row['item_status'] . "</p>";
                                            }  ?>
                                    </center>
                                </td>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>