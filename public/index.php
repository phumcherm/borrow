<?php
require_once "../app/models/Database.php";
require_once "../app/models/function.php";

require_once "../app/models/db.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$num_par_page = 49;
$start_from = ($page - 1) * 49;


$query = "SELECT * FROM itemdata limit $start_from,$num_par_page";
$result_l = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/borrow/public/css/style.css">
    <link rel="stylesheet" href="/borrow/public/css/icons.png">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/icons.png');
            background-position: 5px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 20px;
            padding: 12px 5px 12px 10px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 6px solid #ddd;
            margin-top: -1px;

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

        .pagination {
            background: #DDDDDD;
            padding: 5px;
            display: inline-flex;
            position: relative;
        }

        .pagination li a.page-link {
            background: #DDDDDD;
            background: transparent;
            font-size: 18px;
            font-weight: 500;
            line-height: 35px;
            height: 35px;
            width: 30px;
            padding: 0;
            margin: 0 5px;
            border: none;
            overflow: hidden;
            position: relative;
            z-index: 1;
            transition: all 0.5s ease 0s;
        }




        .pagination li:first-child a.page-link,
        .pagination li:last-child a.page-link {
            font-size: 15px;
            line-height: 37px;
            width: auto;
            padding: 0 8px;
            border-radius: 0;
        }

        .pagination li a.page-link:before {
            content: '';
            background: #fff;
            width: 100%;
            height: 100%;
            border: 2px solid #434242;
            border-radius: 5px;
            transform: scale(0);
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            transition: all 0.3s ease 0s;
        }

        .pagination li a.page-link:hover:before {
            transform: scale(1);
        }

        
    </style>

</head>

<body>
    <?php
    include "nav_user.php";
    require_once "../app/views/session_status.php";
    ?>

    <div id="grad" style="background-color:#827A7A;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
        <div>
            <h2 style="color: #fff;font-family: SUT_Bold;  text-shadow:2px 3px 10px #000; ">
                <i class="fa fa-caret-right" style="font-size:48px"></i>รายการยืม-คืนล่าสุด
            </h2>
        </div>
        <br>

        <center>
            <input class="w3-input " type="text" id="myInput" onkeyup="myFunction()" placeholder="Search .." style="max-width: 100%; max-height: 100%;margin: 15px;border-radius: 7px;padding: 30px;    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;" title="Type in a name">
        </center>
        <br>

        <div class='pagination-container'>
            <p Align=right>
            <nav aria-label="Page navigation example ">
                <ul class="pagination" style="box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;">
                    <li data-page="prev" class="page-item ">
                        <a class="page-link" href="#" style=" border-color:#5B5B5B; color:#434242; "><b><i class="fas fa-angle-left"></i>Previous</b>
                            <span>
                                <span class="sr-only">(current)
                                </span></a>
                    </li><!-- page-item -->
                    <li data-page="next" class="page-item ">
                        <a class="page-link" href="#" style=" border-color:#5B5B5B; color:#434242;"><b>Next</b>&nbsp;&nbsp;<i class="fas fa-angle-right"></i>
                            <span> <span class="sr-only">(current)</span></span></a>
                    </li>
                </ul>
            </nav>
            </p>


            <br><br><br>
            <p Align=right>
                <select   name="state" id="maxRows"  style=" border-color:#5B5B5B; border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;">
                    <option value="5000">Show ALL Rows</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="70">70</option>
                    <option value="100">100</option>
                </select>
            </p>
        </div>



        <div class="table-responsive" style="padding: 25px;">
            <div>
                <table id="datatable" class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                    <div>
                        <thead class="table-dark">
                            <th>
                                <center>Borrow ID</center>
                            </th>
                            <!--  <th>
                                <center>Item ID</center>
                            </th> -->
                            <th>
                                <center>รายการ</center>
                            </th>
                            <th>
                                <center>ยี่ห้อ</center>
                            </th>
                            <th>
                                <center>งานที่นำไปใช้</center>
                            </th>
                            <th>
                                <center>สถานที่กิจกรรม</center>
                            </th>
                            <th>
                                <center>ฝ่าย</center>
                            </th>
                            <th>
                                <center>วันที่ยืม</center>
                            </th>
                            <th>
                                <center>วันที่ต้องคืน</center>
                            </th>
                            <th>
                                <center>สถานะ</center>
                            </th>
                        </thead>

                        <tbody>
                            <?php
                            $selectBorrow = new DB_con();
                            $sql = $selectBorrow->selectBorrow();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <td>
                                    <center><?php echo $row["br_id"] ?></center>
                                </td>
                                <!--  <td>
                                    <center> <?php /* echo $row["id"]  */ ?></center>
                                </td> -->
                                <td>
                                    <center> <?php echo $row["detail"] ?></center>
                                </td>
                                <td>
                                    <center> <?php echo $row["brand"] ?></center>
                                </td>
                                <td>
                                    <center> <?php echo $row["activity"] ?></center>
                                </td>

                                <td>
                                    <center><?php echo $row["location"] ?></center>
                                </td>
                                <td>
                                    <center> <?php echo $row["room"] ?></center>
                                </td>
                                <td>
                                    <?php echo $row["br_time"] ?>
                                </td>
                                <td>
                                    <center><?php echo $row["br_date"] ?></center>
                                </td>
                                <td>

                                    <center>
                                        <?php
                                        if ($row["br_stat"] == 0) {
                                        ?>
                                            <p style="background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">รอดำเนินการ</p>
                                    </center>
                                <?php
                                        } else {
                                ?>
                                    <center>
                                        <p style="background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">คืนแล้ว</p>

                                    <?php
                                        }
                                    ?>
                                    <!-- <center><?php echo $row["borrow.status"] ?></center> -->
                                    </center>
                                </td>
                                <!-- <td>
                                    <center>
                                        <p style="background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">รอดำเนินการ</p>
                                    </center>
                                </td> -->
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>