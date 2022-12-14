<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            font-family: "Times New Roman", Georgia, Serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Playfair Display";
            letter-spacing: 5px;
        }
    </style>
</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:2px; margin-left: 280px;">
            <a href="#about" class="w3-bar-item w3-button">E - Borrow ระบบยืม-คืนวัสดุและครุภัณฑ์ฝ่ายเทคนิควิศวกรรม</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="#about" class="w3-bar-item w3-button">About</a>
            </div>
        </div>
    </div>

    <!-- Sidebar/menu -->
    <div class="row">
        <nav class="w3-sidebar w3-blue w3-collapse w3-large w3-padding" style="z-index:3;width:300px;font-weight:normal;" id="mySidebar"><br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
            <div class="w3-container">
                <img src="img/logo.png" alt="Girl in a jacket" width="250" height="150">
            </div>
            <div class="w3-bar-block ">
                <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">หน้าหลัก</a>
                <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ยืมวัสดุ ครุภัณฑ์</a>
                <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">คืนวัสดุ ครุภัณฑ์</a>
                <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">คลังวัสดุ ครุภัณฑ์</a>
                <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">เกี่ยวกับแผนก</a>
                <a href="view/login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">ออกจากระบบ</a>
            </div>
        </nav>
    </div>
    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
        <span>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</span>
    </header>

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