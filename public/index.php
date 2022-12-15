<?php
require_once "../app/model/server.php"
?>
<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>

<body>
    <header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
        <span>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</span>
    </header>

    <!-- Navbar (sit on top) -->
    <nav style="padding: 15px;">
        <h5>
            <ul class="menu" id="menu" style="margin: 0;">
                <li class="items button"><a href="index.php" onclick="w3_close()">หน้าหลัก</a></li>
                <li class="items button"><a href="borrow.php" onclick="w3_close()">ยืมวัสดุ ครุภัณฑ์</a></li>
                <li class="items button"><a href="#services" onclick="w3_close()">คืนวัสดุ ครุภัณฑ์</a></li>
                <li class="items button"><a href="#designers" onclick="w3_close()">คลังวัสดุ ครุภัณฑ์</a></li>
                <li class="items button"><a href="view/login.php" onclick="w3_close()">ออกจากระบบ</a></li>
            </ul>
        </h5>


        <div class="w3-bar w3-padding " style="width: auto; margin-left: auto;">
            <h2 style="margin-left: 80px;">E - Borrow
                <!-- Right-sided navbar links. Hide them on small screens -->
            </h2>
        </div>
    </nav>

    <div class="row">

        <div style="background-color: #dbd6d6;width: auto; height: 500px;margin: 15px;border-radius: 7px;padding: 30px;">
            <div>
                <h2 style="color: #ff5722;font-family: SUT_Bold;">
                    ▶ ยืม-คืนล่าสุดของคุณ
                </h2>
            </div>
        </div>
    </div>

    <!-- Sidebar/menu -->

    <!-- Top menu on small screens -->


    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }
    </script>
</body>

</html>