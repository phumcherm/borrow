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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    input {
        border-radius: 7px;
        border: none;
        width: 200px;
        height: 40px;
        padding: 20px;
        margin: 15px;
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
        padding: 7px 10px;
        margin-top: 15px;
        text-decoration: none;
        border-radius: 7px;
    }

    center a:hover {
        background-color: #ffa185;
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
            <div class="mb-3" style="max-width: 700px; margin: auto;background-color: #b3abab; border-radius: 7px;padding: 30px;">
                <form action="">
                    <center><a href=""> Scan QR Code</a></center>
                    <div class="blocktext">
                            <input type="text" placeholder="ระบุงานที่จะนำไปใช้ทำกิจกรรม" style="width: 90%;">
                    </div>
                    <div class="row1" style="max-width: 650px;">
                        <input class="w3-input w3-animate-input" type="text" placeholder="ระบุสถานที่" style="width: 40%;">
                        <input  class="w3-input w3-animate-input" style="width: 40%;" type="date" id="date" name="date" required>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>