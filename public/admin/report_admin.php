<?php
require_once "../../app/models/function.php";

$con = mysqli_connect("172.19.0.1:9906", "ceitdb", "12345678", "ceitdb");

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    </style>

</head>

<body  >

    <button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button>
    <?php
    include "nav_admin.php";
    ?>

    <br><br><br>
    <center>
        <a href="nameborrow.php" type="button" class="btn btn-outline-secondary"style="width: auto; height: auto;margin: 10px;border-radius: 7px;padding: 15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;"><b>รายชื่อผู้ยืม</b></a>
        <a href="historyofrepair.php" type="button" class="btn btn-outline-secondary" style="width: auto; height: auto;margin: 10px;border-radius: 7px;padding: 15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;"><b>ประวัติการเเจ้งซ่อม</b></a>
    </center>
    </div> 
</body>
</html>