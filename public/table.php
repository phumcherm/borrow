<?php
require_once "../app/model/server.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <title>Document</title>
</head>

<body>

    <!-- Table Tbl_user -->
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <table id="datatable" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>รหัส</th>
                        <th>เวลา</th>
                        <th>
                            ไอเทมโค้ด
                        </th>
                        <th>
                            รายละเอียด
                        </th>
                        <th>เวลานำเข้า</th>
                        <th>ยี่ห้อ</th>
                        <th>
                            หมายเลขครุภัณฑ์
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
                            <td> <?php echo $row["itemCode"]; ?></td>
                            <td>
                                <center><?php echo $row["detail"]; ?></center>
                            </td>
                            <td><?php echo $row["checkInDate"]; ?></td>
                            <td><?php echo $row["brand"]; ?></td>
                            <td><?php echo $row["serialNumber"]; ?></td>
                            <td>
                                <?php echo $row['price']; ?>
                            </td>
                            <td>
                                <?php echo $row["refDoc"]; ?>
                            </td>
                            <td>
                                <center><?php echo $row["room"]; ?></center>
                            </td>
                            <td><?php echo $row["status"]; ?></td>
                            <td><?php echo $row["notation"]; ?></td>
                            <td>
                                <?php echo $row["misConfirmer"]; ?>
                            </td>
                            <td>
                                <?php echo $row['organization']; ?>
                            </td>
                            <td>
                                <?php echo $row["type"]; ?>
                            </td>
                            <td>
                                <?php echo $row["active"]; ?>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
    </div>
    <!-- script Datatable  -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                paging: false,
                ordering: false,
                info: false,
                scrollY: '430px',
                scrollCollapse: true,

                language: {
                    search: "ค้นหา :",
                    searchPlaceholder: "ค้นหา..."

                },
            });

        });
    </script>
    <script type="text/javascript">
        $.extend(true, $.fn.dataTable.defaults, {
            "language": {
                "sProcessing": "กำลังดำเนินการ...",
                "sLengthMenu": "แสดง แถว",
                "sZeroRecords": "ไม่พบข้อมูล",
                "sInfo": "แสดง START ถึง END จาก TOTAL แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล MAX ทุกแถว)",
                "sInfoPostFix": "",
                "sSearch": "ค้นหา:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "เริ่มต้น",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "สุดท้าย"
                }
            }
        });
        $('.table').DataTable();
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>