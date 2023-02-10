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
    <style>
        #teal {
            /*  background: #062C30; */
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #062C30, #05595B, #139487);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #062C30, #05595B, #139487);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #062C30, #05595B, #139487);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #062C30, #05595B, #139487);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #062C30, #05595B, #139487);
            /* Standard syntax */
        }

        #orange {
            /*  background: #FF5403; */
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #FF5403, #FF7800, #F0A500);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #FF5403, #FF7800, #F0A500);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #FF5403, #FF7800, #F0A500);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #FF5403, #FF7800, #F0A500);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #FF5403, #FF7800, #F0A500);
            /* Standard syntax */
        }

        #sky {
            /*  background: #1363DF; */
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #1363DF, #3AB0FF, #00D7FF);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #1363DF, #3AB0FF, #00D7FF);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #1363DF, #3AB0FF, #00D7FF);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #1363DF, #3AB0FF, #00D7FF);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #1363DF, #3AB0FF, #00D7FF);
            /* Standard syntax */
        }

        #red {
            /*  background: #1363DF; */
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #3D0000, #950101, #FF0000);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #3D0000, #950101, #FF0000);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #3D0000, #950101, #FF0000);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #3D0000, #950101, #FF0000);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #3D0000, #950101, #FF0000);
            /* Standard syntax */
        }

        #blue {
            /*  background: #1363DF; */
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #0A2647, #144272, #2C74B3);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #0A2647, #144272, #2C74B3);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #0A2647, #144272, #2C74B3);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #0A2647, #144272, #2C74B3);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #0A2647, #144272, #2C74B3);
            /* Standard syntax */
        }

        #brown {
            /*  background: #1363DF; */
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #361500, #CC9544);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #361500, #CC9544);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #361500, #CC9544);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #361500, #CC9544);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #361500, #CC9544);
            /* Standard syntax */
        }

        #pink {
            /*  background: #1363DF; */
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #9C254D, #D23369, #F06292);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #9C254D, #D23369, #F06292);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #9C254D, #D23369, #F06292);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #9C254D, #D23369, #F06292);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #9C254D, #D23369, #F06292);
            /* Standard syntax */
        }

        #gray {
            /*  background: #1363DF; */
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #F49D1A, #FFBF00, #FFE15D);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #F49D1A, #FFBF00, #FFE15D);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(bottom right, #F49D1A, #FFBF00, #FFE15D);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #F49D1A, #FFBF00, #FFE15D);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #F49D1A, #FFBF00, #FFE15D);
            /* Standard syntax */
        }
    </style>

</head>

<body>
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container  w3-padding-16" id="teal" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                <h4>จำนวนครุภัณฑ์ทั้งหมด</h4>
                <div class="w3-left"><i class="fa fa-laptop w3-xxxlarge" style="color:#fff"></i></div>
                <div class="w3-right">
                    <h3><?php echo $row['total_sum'] ?> ชิ้น</h3>
                </div>
                <div class="w3-clear"><a style="color: white;" href="index.php?p=itemdata">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container  w3-text-white w3-padding-16" id="orange" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                <h4>จำนวนครุภัณฑ์ที่ถูกยืม </h4>
                <div class="w3-left"><i class="fa fa-download w3-xxxlarge" style="color:#fff"></i></div>
                <div class="w3-right">
                    <h3> 125 ชิ้น</h3>
                </div>
                <div class="w3-clear"><a style="color: white;" href="index.php?p=status">
                        <span class="float-left">รายละเอียด </span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>
            </div>
        </div>



        <div class="w3-quarter">
            <div class="w3-container  w3-padding-16" id="sky" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                <h4>จำนวนครุภัณฑ์ที่คืนแล้ว</h4>
             
                <div class="w3-right">
                    <h3><?php echo $back['total_back'] ?> ชิ้น</h3>
                </div>
                <div class="w3-left"><i class="	far fa-calendar-check w3-xxxlarge" style="color:#fff"></i></div>
                <div class="w3-clear"><a style="color: white;" href="index.php?p=back">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right" ></i>
                        </span>
                    </a></div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container w3-text-white w3-padding-16" id="red" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                <h4>จำนวนครุภัณฑ์ที่ยังไม่คืน</h4>
                <div class="w3-left"><i class="	far fa-calendar-times w3-xxxlarge" style="color:#fff"></i></div>
                <div class="w3-right">
                    <h3> <?php echo $borrow['total_borrow'] ?> ชิ้น</h3>
                </div>
                <div class="w3-clear"> <a style="color: white;" href="index.php?p=borrow">
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
            <div class="w3-container w3-padding-16" id="blue" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                <h4>จำนวนแจ้งซ่อมครุภัณฑ์</h4>
                <div class="w3-left"><i class="fas fa-tools w3-xxxlarge" style="color:#fff"></i></div>
                <div class="w3-right">
                    <h3>3 ชิ้น</h3>
                </div>
                <div class="w3-clear"><a style="color: white;" href="a_repair.php">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container  w3-padding-16" id="brown" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                <h4>จำนวนครุภัณฑ์คงเหลือ </h4>
                <div class="w3-left"><i class="fa fa-upload w3-xxxlarge" style="color:#fff"></i></div>
                <div class="w3-right">
                    <h3> 1940 ชิ้น</h3>
                </div>
                <div class="w3-clear"><a style="color: white;" href="index.php?p=stock">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-container w3-padding-16" id="pink" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                <h4>จำนวนหน่วยงานที่ยืมอุปกรณ์</h4>
             
                <div class="w3-right">
                    <h3> 6 ครั้ง </h3>
                </div>
                <div class="w3-left"><i class="	fa fa-id-card  w3-xxxlarge " style="color:#fff"></i></div>
                <div class="w3-clear"><a style="color: white;" href="index.php?p=office">
                        <span class="float-left">รายละเอียด</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a></div>

            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-gray w3-text-white w3-padding-16" id="gray" style="border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                <h4>จำนวนผู้ใช้งานระบบ</h4>
                <div class="w3-left"><i class="	fa fa-users w3-xxxlarge" style="color:#fff"></i></div>
                <div class="w3-right">
                    <h3> 50 คน</h3>
                </div>
                <div class="w3-clear"> <a style="color: white;" href="index.php?p=user">
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