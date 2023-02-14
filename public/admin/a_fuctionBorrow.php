<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- js Bootstap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title></title>
</head>
<style>
    /*chart */
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

<body>
    <!-- Modal -->
    <!-- Modal Bed -->
    <div class="modal" id="showborrow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 24px;text-align: center;">ข้อมูลการยืมครุภัณฑ์</h5>
                    <button type="button" class="close" data-dismiss="modal" onclick="Close()" aria-label="Close">
                        <span aria-hidden="true">✕</span>
                    </button>
                </div>
                <input type="hidden" name="u_id" id="u_id">
                <div class="modal-body">
                    <form action="controller/update.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">itemCode</h7>
                                <input type="text" disabled name="bb_id" id="bb_id" class="form-control">
                            </div>
                            <div class="col-6">
                                <h7 class="text-center ">ชื่อครุภัณฑ์</h7>
                                <input type="text" disabled class="form-control" name="txt_number" id="txt_number" minlength="13" maxlength="13">

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">ชื่อ</h7>
                                <input type="text" disabled class="form-control" name="txt_fname" id="txt_fname" placeholder="">
                            </div>
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">นามสกุล</h7>
                                <input type="text" disabled class="form-control" name="txt_lname" id="txt_lname" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">ตำแหน่ง</h7>
                                <input type="text" disabled class="form-control" name="txt_fname" id="txt_fname" placeholder="">
                            </div>
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">ฝ่าย</h7>
                                <input type="text" disabled class="form-control" name="txt_lname" id="txt_lname" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">งานที่ยืม</h7>
                                <input type="text" disabled class="form-control" name="txt_age" id="txt_age" placeholder="">
                            </div>
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">สถานที่</h7>
                                <input type="text" disabled name="txt_group" id="txt_group" class="form-control">
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">วันที่ยืม</h7>
                                <input type="text" disabled class="form-control" name="txt_tel" id="txt_tell" placeholder="" minlength="10" maxlength="10">
                            </div>
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">กำหนดวันคืน</h7>
                                <input type="text" disabled name="txt_date" id="txt_date" class="form-control">
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">วันที่คืน</h7>
                                <input type="text" disabled class="form-control" name="txt_tel" id="txt_tell" placeholder="" minlength="10" maxlength="10">
                            </div>
                            <div class="col-6">
                                <h7 class="text-center" style="color:black">เบอร์โทร</h7>
                                <input type="text" disabled name="txt_date" id="txt_date" class="form-control">
                            </div>

                        </div>
                        <br>

                        <div class="modal-footer ">
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Card -->
    <div class="graphBox">
        <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <p style="font-size: 36px;text-align: center;color: #E6581D;">จำนวนครุภัณฑ์ที่ยังไม่คืน</p>
            <div>
                <div class="table-container">
                    <table class="table" id="data" style="text-align: center;">
                        <thead style="color:white; background-color:#E6581D;">
                            <tr>
                                <th>ชื่อ - นามสกุล</th>
                                <!-- <th>รหัสครุภัณฑ์</th> -->
                                <th>ชื่ออุปกรณ์</th>
                                <th>สถานที่</th>
                                <th>วันที่ยืม</th>
                                <th>กำหนดคืน</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selectAll = new DB_con();
                            $sql = $selectAll->dataBorrow();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td data-label="ชื่อ - นามสกุล.">สังคัง สังขาร</td>
                                    <!-- <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td> -->
                                    <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                    <td data-label="สถานที่."><?php echo $row['location'] ?></td>
                                    <td data-label="วันที่ยืม."><?php echo $row['br_time'] ?></td>
                                    <td data-label="กำหนดคืน."><?php echo $row['br_date'] ?></td>
                                    <td><button class="btn btn-primary button" data-toggle="modal" data-target="#showborrow"> ข้อมูล</button></td>
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
</body>

</html>