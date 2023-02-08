<?php
require_once "../../app/models/Database.php";
require_once "../../app/models/function.php";
$coutData = new DB_con();
$sql = $coutData->selectCountData();
$row = mysqli_fetch_array($sql);

$coutBorrow = new DB_con();
$sql = $coutBorrow->selectCountBorrow();
$borrow = mysqli_fetch_array($sql);

$coutBack = new DB_con();
$sql = $coutBack->selectCountBack();
$back = mysqli_fetch_array($sql);

?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- chart js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>


</head>

<body>
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-teal w3-padding-16">
                <h4>จำนวนครุภัณฑ์ทั้งหมด</h4>
                <div class="w3-left"><i class="fa fa-laptop w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3><?php echo $row['total_sum'] ?> ชิ้น</h3>
                </div>
                <div class="w3-clear"><a style="color: white;" href="#">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
                <h4>จำนวนครุภัณฑ์ที่ถูกยืม </h4>
                <div class="w3-left"><i class="fa fa-download w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3> 125 ชิ้น</h3>
                </div>
                <div class="w3-clear"><a style="color: white;" href="#">
                        <span class="float-left">รายละเอียด </span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
                <h4>จำนวนครุภัณฑ์ที่คืนแล้ว</h4>

                <div class="w3-right">
                    <h3><?php echo $back['total_back'] ?> ชิ้น</h3>
                </div>
                <div class="w3-left"><i class="	far fa-calendar-check w3-xxxlarge"></i></div>
                <div class="w3-clear"><a style="color: white;" href="#">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-red w3-text-white w3-padding-16">
                <h4>จำนวนครุภัณฑ์ที่ยังไม่คืน</h4>
                <div class="w3-left"><i class="	far fa-calendar-times w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3> <?php echo $borrow['total_borrow'] ?> ชิ้น</h3>
                </div>
                <div class="w3-clear"> <a style="color: white;" href="#">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>

        </div>
    </div>
    <!--  -->
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-indigo w3-padding-16">
                <h4>จำนวนแจ้งซ่อมครุภัณฑ์</h4>
                <div class="w3-left"><i class="fas fa-tools w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3>3 ชิ้น</h3>
                </div>
                <div class="w3-clear"><a style="color: white;" href="#">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-brown w3-padding-16">
                <h4>จำนวนครุภัณฑ์คงเหลือ </h4>
                <div class="w3-left"><i class="fa fa-upload w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3> 1940 ชิ้น</h3>
                </div>
                <div class="w3-clear"><a style="color: white;" href="#">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-pink w3-padding-16">
                <h4>จำนวนหน่วยงานที่ยืมอุปกรณ์</h4>

                <div class="w3-right">
                    <h3> 6 ครั้ง </h3>
                </div>
                <div class="w3-left"><i class="	fa fa-id-card  w3-xxxlarge"></i></div>
                <div class="w3-clear"><a style="color: white;" href="#">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-gray w3-text-white w3-padding-16">
                <h4>จำนวนผู้ใช้งานระบบ</h4>
                <div class="w3-left"><i class="	fa fa-users w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3> 50 คน</h3>
                </div>
                <div class="w3-clear"> <a style="color: white;" href="#">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>

        </div>
    </div>

</body>

</body>

</html>