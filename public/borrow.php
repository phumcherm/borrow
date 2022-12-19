<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยืมวัสดุ ครุภัณฑ์</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
    input {
        border-radius: 7px;
        border: none;
        width: 200px;
        height: 40px;
        padding: 20px;
        margin: 15px auto 15px auto;
        text-align: center;
    }

    .blocktext {
        margin-left: auto;
        margin-right: auto;
        width: auto;
    }

    a:hover {
        background-color: #dbd6d6;
        color: white;
        text-decoration: none;
    }

    center a {
        background-color: #ff5722;
        color: white;
        padding: 15px 10px;
        margin-top: 15px;
        text-decoration: none;
        border-radius: 7px;
    }

    button {
        color: white;
        background-color: #ff5722;
        padding: 15px;
        border: none;
        border-radius: 7px;
    }

    a {
        color: white;
    }

    /* center a:hover {
        background-color: #ffa185;
    } */
</style>

<body>
    <?php
    include "navbar.php";
    ?>

    <div>

        <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px;">
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ ยืมวัสดุ ครุภัณฑ์
            </h2>
            <div style="max-width: 800px; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px;">
                <h3 style="color: white;font-family: SUT_Bold;"><i class="far fa-edit"></i>ทำรายการ</h3>
                <form action="">
                    <center><a href="#"> Scan QR Code</a></center>
                    <center>
                        <input class="w3-input w3-animate-input" type="text" required placeholder="ระบุงานที่จะนำไปใช้ทำกิจกรรม" style="max-width: 500px;">
                        <div style="display: flex;">
                            <input class="w3-input w3-animate-input" type="text" required placeholder="ระบุสถานที่" style="width: 300px;">
                            <input class="w3-input" style="width: 300px;" type="date" id="date" name="date" required>
                        </div>
                    </center>
                    <button type="submit">ยืนยันทั้งหมด</button>
                </form>
            </div>
            <br>
            <div style="max-width: 1600px;margin-left: auto;">
                <h2 style="padding-left: 200px;">รายละเอียดการยืม</h2>
                <table class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;">
                    <thead class="table-dark">
                        <th>
                            <center>ลำดับ</center>
                        </th>
                        <th>
                            <center>รายการ</center>
                        </th>
                        <th>
                            <center>ห้อง-แผนก</center>
                        </th>
                        <th>
                            <center>วันที่ยืม</center>
                        </th>
                        <th>
                            <center>วันที่คืน</center>
                        </th>
                    </thead>
                    <tbody>
                        <td>
                            <center>1</center>
                        </td>
                        <td>
                            <center>สายไฟ</center>
                        </td>
                        <td>
                            <center>ศนท.</center>
                        </td>
                        <td>
                            <center>12-12-2565</center>
                        </td>
                        <td>
                            <center>30-12-2565</center>
                        </td>
                    </tbody>
                    <tbody>
                        <td>
                            <center>1</center>
                        </td>
                        <td>
                            <center>สายไฟ</center>
                        </td>
                        <td>
                            <center>ศนท.</center>
                        </td>
                        <td>
                            <center>12-12-2565</center>
                        </td>
                        <td>
                            <center>30-12-2565</center>
                        </td>
                    </tbody>
                    <tbody>
                        <td>
                            <center>1</center>
                        </td>
                        <td>
                            <center>สายไฟ</center>
                        </td>
                        <td>
                            <center>ศนท.</center>
                        </td>
                        <td>
                            <center>12-12-2565</center>
                        </td>
                        <td>
                            <center>30-12-2565</center>
                        </td>
                    </tbody>
                </table>
            </div>

        </div>

    </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>