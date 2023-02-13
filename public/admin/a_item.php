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

    <div class="container" style="padding-top:10px;max-width: 900px;">
        <form action="controller/insert_db.php" method="post">
            <div class="row">
                <div class="col-6">
                    <h7 class="text-center ">Qr-code</h7>
                    <input type="text" required class="form-control" nname="input_text" id="input_text" autocomplete="off" placeholder="Qr-code">

                </div>
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Detail</h7>
                    <input type="text" required class="form-control" name="txt_number" placeholder="ชื่อครุภัณฑ์">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h7 class="text-center" style="color:black">CheckIn-Date</h7>
                    <input type="text" class="form-control" required name="txt_fname" placeholder="วันที่ได้อุปกรณ์ ระบุ (เช่น 1 ม.ค. 2565)">
                </div>
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Brand</h7>
                    <input type="text" required class="form-control" name="txt_lname" placeholder="ยี่ห้อครุภัณฑ์">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Serial-number </h7>
                    <input type="text" required class="form-control" name="txt_age" placeholder="หมายเลขครุภัณฑ์ (ไม่มีให้ใส่ - )">
                </div>
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Price</h7>
                    <input type="text" required class="form-control" name="txt_tell" placeholder="ราคา">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Refdoc </h7>
                    <input type="text" required class="form-control" name="txt_age" placeholder="สัญญา">
                </div>
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Room</h7>
                    <input type="text" required class="form-control" name="txt_tell" placeholder="ห้องที่จัดเก็บครุภัณฑ์">
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Status </h7>
                    <input type="text" required class="form-control" name="txt_age" placeholder="สถานะการใช้งาน">
                </div>
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Notation</h7>
                    <input type="text" required class="form-control" name="txt_tell" placeholder="ผู้รับผิดชอบ (ระบุ ชื่อ/ฝ่าย)">
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h7 class="text-center" style="color:black">misConfirmer</h7>
                    <input type="number" required class="form-control" name="txt_doctor" placeholder="คอนเฟิร์ม">
                </div>
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Organization</h7>
                    <input type="text" required class="form-control" name="txt_tell" placeholder="องค์กร (เช่น ศทน.)">
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Type</h7>
                    <input type="number" required class="form-control" name="txt_doctor" placeholder="รายละเอียด (เช่น ระบบตัดต่อคอม)">
                </div>
                <div class="col-6">
                    <h7 class="text-center" style="color:black">Active</h7>
                    <select required class="form-select col-12 form-control" aria-label="Default select example" name="txt_group">
                        <option selected disabled value="">สถานภาพ</option>
                        <option value="0">ไม่พร้อมใช้งาน</option>
                        <option value="1">พร้อมใช้งาน</option>
                    </select>
                </div>

            </div>
            <br>
            <div class="form-group">
                <div class="mb-3">

                    <button type="submit" name="btn_insert" class="btn btn-success fa fa-save" value=""> บันทึก</button>
                    <a href="index.php" class="btn btn-danger fa fa-window-close"> ยกเลิก</a>
                    <button class="btn btn-primary button" data-toggle="modal" data-target="#myModal"><i class="fa fa-qrcode"></i> Genarate QRcode</button>
                    <!-- <a href="a_qrcode.php" class="btn btn-primary ">Genarate QRcode</a> -->
                </div>
            </div>
    </div>
    </form>
    <?php include 'modalQR.php' ?>
</body>

</html>