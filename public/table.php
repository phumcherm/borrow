<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Table Tbl_user -->
    <div class="card " style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;background-color: rgb(240, 240, 240);">
        <div class="container">
            <table class="table table-striped table-bordered table-hover">
                <table id="datatable" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>รหัส</th>
                            <th>เวลา</th>
                            <th>
                                <center>ไอเทมโค้ด</center>
                            </th>
                            <th>
                                <center>รายละเอียด</center>
                            </th>
                            <th>เวลานำเข้า</th>
                            <th>ยี่ห้อ</th>
                            <th>
                                <center>หมายเลขครุภัณฑ์</center>
                            </th>
                            <th>ราคา</th>
                            <th>อ้างอิง</th>
                            <th>ห้อง</th>
                            <th>สถานะ</th>
                            <th>หมายเหตุ</th>
                            <th>ผู้ยืนยัน</th>
                            <th>ตึก</th>
                            <th>พิมพ์</th>
                            <th>active</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $select_stmt = $db->prepare("SELECT * FROM itemdata ");
                        $select_stmt->execute();

                        while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>

                            <tr>
                                <td>
                                    <center><?php echo $row['id']; ?></center>
                                </td>
                                <td><?php echo $row["updateTime"]; ?></td>
                                <td><?php echo $row["u_number"]; ?></td>
                                <td> <?php echo $row["f_name"] . '  ' . $row["l_name"]; ?></td>
                                <td>
                                    <center><?php echo $row["age_Year"]; ?></center>
                                </td>
                                <td><?php echo $row["u_doctor"]; ?></td>
                                <td><?php echo $row["u_tell"]; ?></td>
                                <td>
                                    <center><a href="edit.php?update_id=<?php echo $row["u_id"]; ?>" class="btn btn-warning fa fa-edit "> แก้ไข</a></center>
                                </td>
                                <td>
                                    <center><a data-id="<?php echo $row['u_id']; ?>" href="?delete_id=<?php echo $row['u_id']; ?>" class="btn btn-danger fa fa-trash-o float-end delete-btn  "> ลบ</a></center>
                                </td>
                                <td>
                                    <center><a href="users.php?user_id=<?php echo $row["u_id"]; ?>" class="btn btn-primary fa fa-address-book  "> ข้อมูล</a></center>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <br>


        </div>

</body>

</html>