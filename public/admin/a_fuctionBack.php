<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

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
    <div class="modal" id="showback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <p style="font-size: 36px;text-align: center;color: #E6581D;">จำนวนครุภัณฑ์ที่คืนแล้ว</p>
            <div>
                <div class="table-container">
                    <table class="table" id="data" style="text-align: center;">
                        <thead style="color:white; background-color:#E6581D;">
                            <tr>
                                <th>รหัสยืม</th>
                                <th>รหัสครุภัณฑ์</th>
                                <th>ชื่ออุปกรณ์</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selectAll = new DB_con();
                            $sql = $selectAll->dataBack();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td data-label="รหัสยืม."><?php echo $row['br_id'] ?></td>
                                    <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td>
                                    <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                    <td><button class="btn btn-primary button" data-toggle="modal" data-target="#showback"> ข้อมูล</button></td>

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


    </div>
    </div>
    </div>
    </div>

    <!-- script Datatable -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>



    <!--    <script>
        const numChart = document.getElementById('myChart');
        const timeChart = document.getElementById('testChart');
        new Chart(numChart, {
            type: 'polarArea',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        new Chart(timeChart, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script> -->
    <!-- chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>