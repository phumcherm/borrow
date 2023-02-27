<?php
session_start();
require_once "../../app/models/Database.php";
require_once "../../app/models/function.php";
require_once "../../app/models/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/borrow/public/css/style.css">
    <title>จัดการครุภัณฑ์</title>

</head>

<body>
    <?php include 'a_navbar.php' ?>

    <?php

    if (isset($_GET['edit_id'])) {
        $id = $_GET['edit_id'];
        $selectAll = new DB_con();
        $sql = $selectAll->selectEdit($id);
        $row = mysqli_fetch_array($sql);
    }
    ?>
    <div class="container" style="padding-top:10px;max-width: 900px;">
        <!-- <form action="controller/insert_db.php" method="post"> -->
        <div class="row">
            <div class="col-6">
                <h7 class="text-center ">Qr-code</h7>
                <input type="text" required class="form-control" name="txt_itemCode" id="txt_itemCode" autocomplete="off" value="<?php echo $row['itemCode'] ?>">

            </div>
            <div class="col-6">
                <h7 class="text-center" style="color:black">Detail</h7>
                <input type="text" required class="form-control" name="txt_detail" value="<?php echo $row['detail'] ?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h7 class="text-center" style="color:black">CheckIn-Date</h7>
                <input type="text" class="form-control" required name="txt_check_date" value="<?php echo $row['checkInDate'] ?>">
            </div>
            <div class="col-6">
                <h7 class="text-center" style="color:black">Brand</h7>
                <input type="text" required class="form-control" name="txt_brand" value="<?php echo $row['brand'] ?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h7 class="text-center" style="color:black">Serial-number </h7>
                <input type="text" required class="form-control" name="txt_Serial" value="<?php echo $row['serialNumber'] ?>">
            </div>
            <div class="col-6">
                <h7 class="text-center" style="color:black">Price</h7>
                <input type="text" required class="form-control" name="txt_price" value="<?php echo $row['price'] ?> บาท">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h7 class="text-center" style="color:black">Refdoc </h7>
                <input type="text" required class="form-control" name="txt_refdoc" value="<?php echo $row['refDoc'] ?>">
            </div>
            <div class="col-6">
                <h7 class="text-center" style="color:black">Room</h7>
                <input type="text" required class="form-control" name="txt_room" value="<?php echo $row['room'] ?>">
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-6">
                <h7 class="text-center" style="color:black">Status </h7>
                <input type="text" required class="form-control" name="txt_status" value="<?php echo $row['status'] ?>">
            </div>
            <div class="col-6">
                <h7 class="text-center" style="color:black">Notation</h7>
                <input type="text" required class="form-control" name="txt_Notation" value="<?php echo $row['notation'] ?>">
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h7 class="text-center" style="color:black">misConfirmer</h7>
                <input type="number" required class="form-control" name="txt_misCon" value="<?php echo $row['misConfirmer'] ?>">
            </div>
            <div class="col-6">
                <h7 class="text-center" style="color:black">Organization</h7>
                <input type="text" required class="form-control" name="txt_Organiza" value="<?php echo $row['organization'] ?>">
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h7 class="text-center" style="color:black">Type</h7>
                <input type="text" required class="form-control" name="txt_Type" value="<?php echo $row['type'] ?>">
            </div>
            <div class="col-6">
                <h7 class="text-center" style="color:black">Active</h7>
                <select required class="form-select col-12 form-control" aria-label="Default select example" name="txt_Ative">
                    <option selected disabled value="<?php echo $row['active'] ?>"><?php if ($row['active'] == 0) {
                                                                                        echo "ไม่พร้อมใช้งาน";
                                                                                    } else {
                                                                                        echo   "พร้อมใช้งาน";
                                                                                    } ?></option>
                    <option value="0">ไม่พร้อมใช้งาน</option>
                    <option value="1">พร้อมใช้งาน</option>
                </select>
            </div>

        </div>
        <br>
        <div class="form-group">
            <div class="mb-3">

                <button type="submit" name="btn_insert" class="btn btn-success fa fa-save" value=""> บันทึก</button>
                <a href="a_edit.php" class="btn btn-danger fa fa-window-close"> ยกเลิก</a>
                <button class="btn btn-primary button" data-toggle="modal" data-target="#myModal"><i class="fa fa-qrcode"></i> Genarate QRcode</button>

            </div>
        </div>
    </div>
    <!-- </form> -->
    <?php include 'modalQR.php' ?>
</body>

</html>