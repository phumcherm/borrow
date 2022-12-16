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
        margin: 15px;
    }
</style>

<body>
    <?php
    include "navbar.php";
    ?>

    <div class="">

        <div style="background-color: #dbd6d6;width: auto; height: 500px;margin: 15px;border-radius: 7px;padding: 30px;">
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ ยืมวัสดุ ครุภัณฑ์
            </h2>
            <div style="max-width: 800px; margin: auto; background-color: #ff5722; border-radius: 7px;">
                <form action="">
                    <center>
                        <input type="text" placeholder="ระบุงานที่จะนำไปใช้ทำกิจกรรม">
                        <div class="row1" style="max-width: 650px;padding: 15px auto 15px;">
                            <input type="text" placeholder="ระบุสถานที่" style="width: 300px;">

                            <input class="w3-input w3-animate-input" style="width: 300px;" type="date" id="date" name="date" required>

                        </div>

                    </center>
                </form>
            </div>
        </div>
    </div>

</body>

</html>