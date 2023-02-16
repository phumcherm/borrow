<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <title></title>
</head>
<style>
    /*chart */
    .graphBox {
        position: relative;
        width: 100%;
        padding: 20px;
        display: grid;
        grid-template-columns: 2fr;
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
    <div class="graphBox">
        <div class="box" style=" box-shadow: rgba(0, 0.35, 0, 0.35) 0px 0px 15px  ;">
            <p style="font-size: 36px;text-align: center;color: #E6581D;">จำนวนครุภัณฑ์ที่ถูกยืม</p>
            <input type="date">
            <input type="date">
            <button class="btn btn-primary" type="submit">ค้นหา</button>
            <br>
            <div>
                <div class="table-container">
                    <table id="databack" class="table" style="text-align: center;">
                        <thead style="color:white; background-color:#E6581D;">
                            <tr>
                                <th>รหัสยืม</th>
                                <th>วันที่คืน</th>
                                <th>เลขครุภัณฑ์</th>
                                <th>ชื่ออุปกรณ์</th>
                                <th>สถานะ</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selectAll = new DB_con();
                            $sql = $selectAll->dataBackAll();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td data-label="รหัสยืม."><?php echo $row['bk_id'] ?></td>
                                    <td data-label="วันที่คืน."><?php echo $row['bk_time'] ?></td>
                                    <!-- <td data-label="วันที่กำหนด."><?php echo $row['br_date'] ?></td> -->
                                    <td data-label="เลขครุภัณฑ์."><?php echo $row['itemCode'] ?></td>
                                    <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                    <td data-label="สถานะ">
                                        <?php
                                        if ($row["br_stat"] == 0) {
                                        ?>
                                            <p style="background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">รอดำเนินการ</p>

                                        <?php
                                        } else {
                                        ?>

                                            <p style="background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">คืนแล้ว</p>

                                        <?php
                                        }
                                        ?>
                                        <?php echo $row["borrow.status"] ?>

                                    </td>
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

    <!-- script Datatable  -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
</body>

</html>