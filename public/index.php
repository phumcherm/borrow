<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css"  >
    <style>
        @font-face {
            font-family: SUT_Regular;
            src: url(SUT-Fonts/SUT_Regular_ver_1.00.ttf);
        }

        @font-face {
            font-family: SUT_Bold;
            src: url(SUT-Fonts/SUT_Bold_ver_1.00.ttf);
        }


        body {
            font-family: SUT_Bold;
        }

        * {

            font-family: SUT_Regular;
        }

        /* h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: SUT_Bold;
            letter-spacing: 1px;
        } */
    </style>
</head>

<body>
    <header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
        <span>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</span>
    </header>

    <!-- Navbar (sit on top) -->
    <!-- <nav> -->
    <ul class="menu" id="menu" style="padding-right: 0;">
        <li class="items button"><a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">หน้าหลัก</a></li>
        <li class="items button"><a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ยืมวัสดุ ครุภัณฑ์</a></li>
        <li class="items button"><a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">คืนวัสดุ ครุภัณฑ์</a></li>
        <li class="items button"><a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">คลังวัสดุ ครุภัณฑ์</a></li>
        <li class="items button"><a href="view/login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ออกจากระบบ</a></li>
    </ul>

    <!-- </nav> -->
    <div class="w3-bar w3-white w3-padding w3-card" style="width: auto; margin-left: auto;">
        <h3>
            <center>E - Borrow ระบบยืม-คืนวัสดุและครุภัณฑ์ฝ่ายเทคนิควิศวกรรม
                <!-- Right-sided navbar links. Hide them on small screens -->
            </center>
        </h3>
    </div>

    <div class="row">
        
        <div style="background-color: red;width: auto; height: 500px;margin-left: auto;">
            <div>
                <h3>
                    <center>
                        ยืม-คืนล่าสุดของคุณ
                    </center>
                </h3>
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