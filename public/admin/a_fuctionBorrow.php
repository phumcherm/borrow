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
                                <th>ชื่ออุปกรณ์</th>
                                <th>สถานที่</th>
                                <th>วันที่ยืม</th>
                                <th>กำหนดคืน</th>
                               

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selectAll = new DB_con();
                            $sql = $selectAll->dataBorrow();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td data-label="ชื่อ - นามสกุล."><?php echo $row['fname'] . " " . $row['lname'] ?></td>
                                    <!-- <td data-label="รหัสครุภัณฑ์."><?php echo $row['itemCode'] ?></td> -->
                                    <td data-label="ชื่ออุปกรณ์."><?php echo $row['detail'] ?></td>
                                    <td data-label="สถานที่."><?php echo $row['location'] ?></td>
                                    <td data-label="วันที่ยืม."><?php echo $row['borrow_date'] ?></td>
                                    <td data-label="กำหนดคืน."><?php echo $row['br_date'] ?></td>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        async function Databorrow(br_id) {
            console.log(br_id)

            $.ajax({
                url: "a_borrowDeteil.php",
                method: "post",
                dataType: 'json',
                data: {
                    br_id: br_id,
                },
                success: function(response) {
                    console.log(response)
                    document.getElementById("br_id").value = response.br_id;
                    document.getElementById("bk_id").value = response.bk_id;
                    document.getElementById("user_id").value = response.user_id;
                    document.getElementById("txt_data").value = response.itemCode;
                    document.getElementById("txt_name").value = response.detail;
                    document.getElementById("txt_work").value = response.activity;
                    document.getElementById("txt_location").value = response.location;
                    document.getElementById("txt_date").value = response.br_date;
                    document.getElementById("txt_dateBorrow").value = response.br_time;
                    document.getElementById("txt_fname").value = response.fname;
                    document.getElementById("txt_lname").value = response.lname;
                    document.getElementById("txt_position").value = response.post;
                    document.getElementById("txt_hr").value = response.department;
                    document.getElementById("txt_phone").value = response.phone_num;
                    document.getElementById("txt_dateBack").value = response.bk_date;

                }
            });
        }
    </script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>

</html>