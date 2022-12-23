<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" href="/borrow/public/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<style>
    #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }
</style>
<body>
    <!-- <header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
        <span>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</span> 
    </header> -->

    <!-- Navbar (sit on top) -->
    <?php
    include "nav_admin.php";
    ?>


    <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px;">
        <div>
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ รายการวัสดุและครุภัณฑ์
            </h2>
        </div>
        <br>
        <div style="max-width: 1600px;margin-left: auto;">
            <table class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;">
                <thead class="table-dark">
                    <th>
                        <center>ลำดับ</center>
                    </th>
                    <th>
                        <center>รายการ</center>
                    </th>
                    <th>
                        <center>รุ่น</center>
                    </th>
                    <th>
                        <center>ยี่ห้อ</center>
                    </th>
                    <th>
                        <center>ประเภท</center>
                    </th>
                    <th>
                        <center>จำนวน</center>
                    </th>
                </thead>
                <?php for ($i = 0; $i < 25; $i++) {
                ?>
                    <tbody>
                        <td>
                            <center><?php echo $i ?></center>
                        </td>
                        <td>
                            <center>แลปท็อป</center>
                        </td>
                        <td>
                            <center>Pavillion</center>
                        </td>
                        <td>
                            <center>HP</center>
                        </td>
                        <td>
                            <center>อุปกรณ์</center>
                        </td>
                        <td>
                            <center>1</center>
                        </td>
                    </tbody>
                <?php } ?>
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