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
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
    <!-- <header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
        <span>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</span> 
    </header> -->

    <!-- Navbar (sit on top) -->
    <?php
    include "navbar.php";
    ?>


    <div style="background-color: #dbd6d6;width: auto; height: 500px;margin: 15px;border-radius: 7px;padding: 30px;">
        <div>
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ ยืม-คืนล่าสุดของคุณ
            </h2>
        </div>
        <br>
        <div style="max-width: 1600px;margin-left: auto;">
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