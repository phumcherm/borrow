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

    /* center a:hover {
        background-color: #ffa185;
    } */
</style>

<body>
    <?php
    include "navbar.php";
    ?>

    <div>

        <div style="background-color: #dbd6d6;width: auto; height: 500px;margin: 15px;border-radius: 7px;padding: 30px;">
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ ยืมวัสดุ ครุภัณฑ์
            </h2>
            <div style="max-width: 600px; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px;">
                <form action="">
                    <center><a href="#"> Scan QR Code</a></center>
                    <center>
                        <input class="w3-input w3-animate-input" type="text"  required placeholder="ระบุงานที่จะนำไปใช้ทำกิจกรรม" style="max-width: 300px;">
                        <div style="display: flex;">
                            <input class="w3-input w3-animate-input" type="text" required placeholder="ระบุสถานที่" style="width: 200px;">
                            <input class="w3-input" style="width: 200px;" type="date" id="date" name="date" required>
                        </div>
                    </center>
                    <button type="submit">ยืนยันทั้งหมด</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>