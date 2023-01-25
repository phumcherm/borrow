<?php
require_once "../app/models/Database.php";
require_once "../app/models/function.php";
/* // require_once "../app/models/Database.php"; */


$con = mysqli_connect("172.19.0.1:9906", "ceitdb", "12345678", "ceitdb");

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$num_par_page = 49;
$start_from = ($page - 1) * 49;


$query = "SELECT * FROM itemdata limit $start_from,$num_par_page";
$result_l = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="/borrow/public/css/style.css">
    <link rel="stylesheet" href="/borrow/public/css/icons.png">



    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/icons.png');
            background-position: 5px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 20px;
            padding: 12px 5px 12px 10px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 6px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }
    </style>

</head>

<body>


    <!-- <header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
        <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
        <span>ศูนย์นวัตกรรมและเทคโนโลยีการศึกษา</span> 
    </header> -->

    <!-- Navbar (sit on top) -->
    <?php
    include "nav_user.php";
    ?>


    <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
        <div>
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                <i class="fa fa-caret-right" style="font-size:48px"></i>ยืม-คืนล่าสุดของคุณ
            </h2>
        </div>
        <br>


        <center>
            <input class="w3-input " type="text" id="myInput" onkeyup="myFunction()" placeholder="Search .." style="max-width: 100%; max-height: 100%;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;" title="Type in a name">
        </center>

        <br>
        <div class="table-responsive">
            <div >
                <table id="datatable" class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                    <thead class="table-dark">
                        <th>
                            <center>id </center>
                        </th>
                        <th>
                            <center>updateTime</center>
                        </th>
                        <th>
                            <center>itemCode</center>
                        </th>
                        <th>
                            <center>detail</center>
                        </th>
                        <th>
                            <center>checkInDate</center>
                        </th>
                        <th>
                            <center>brand</center>
                        </th>
                        <th>
                            <center>serialNumber</center>
                        </th>
                        <th>
                            <center>price</center>
                        </th>
                        <th>
                            <center>refDoc</center>
                        </th>
                        <th>
                            <center>room</center>
                        </th>
                        <th>
                            <center>status</center>
                        </th>

                    </thead>
                    <?php
                    // $rs = $conn->query("select count(id) as num from itemdata"); // query แบบมีเงื่อนไข ถ้ามีการส่งค่าค้นหา
                    $selectCount = new DB_con();
                    $sql = $selectCount->selectCount();
                    $row = mysqli_fetch_array($sql);

                    $totalRow =  $row['num'];

                    $rowPerPage = 5;
                    $startRow = 0;

                    $selectPage = new DB_con();
                    $sql = $selectPage->selectPage($startRow, $rowPerPage);

                    while ($row = mysqli_fetch_array($sql)) {

                    ?>
                        <tbody id="data">
                            <!-- <center>
                                <td>
                                    <?php echo $row["id"] ?>
                                </td>
                                <td>
                                    <?php echo $row["updateTime"] ?>
                                </td>
                                <td>
                                    <?php echo $row["itemCode"] ?>
                                </td>
                                <td>
                                    <?php echo $row["detail"] ?>
                                </td>
                                <td>
                                    <?php echo $row["checkInDate"] ?>
                                </td>
                                <td>
                                    <?php echo $row["brand"] ?>
                                </td>
                                <td>
                                    <?php echo $row["serialNumber"] ?>
                                </td>
                                <td>
                                    <?php echo $row["price"] ?>
                                </td>
                                <td>
                                    <?php echo $row["refDoc"] ?>
                                </td>
                                <td>
                                    <?php echo $row["room"] ?>
                                </td>
                            </center> -->
                        </tbody>
                    <?php } ?>
                </table>

                <center>
                    <button style="background-color: #ff5722;padding: 10px 40px;font-size: 30px;" onclick="rowFunction()">+</button>
                </center>

                <div >
                    <h1 id="show"></h1>
                </div>
            </div>
        </div>
        <script>
            var ajax = new XMLHttpRequest();
            var method = "GET";
            var url = "data.php";
            var asynchronous = true;

            ajax.open(method, url, asynchronous);
            ajax.send();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var data = JSON.parse(this.responseText);
                    console.log(data);

                    var html = "";

                    for (var a = 0; a < data.length; a++) {
                        var id = data[a].id;
                        var updateTime = data[a].updateTime;
                        var itemCode = data[a].itemCode;
                        var detail = data[a].detail;
                        var checkInDate = data[a].checkInDate;
                        var brand = data[a].brand;
                        var serialNumber = data[a].serialNumber;
                        var price = data[a].price;
                        var refDoc = data[a].refDoc;
                        var room = data[a].room;

                        html += "<tr>";
                        html += "<td>" + id + "</td>";
                        html += "<td>" + updateTime + "</td>";
                        html += "<td>" + itemCode + "</td>";
                        html += "<td>" + detail + "</td>";
                        html += "<td>" + checkInDate + "</td>";
                        html += "<td>" + brand + "</td>";
                        html += "<td>" + serialNumber + "</td>";
                        html += "<td>" + price + "</td>";
                        html += "<td>" + refDoc + "</td>";
                        html += "<td>" + room + "</td>";
                        html += "</tr>";

                    }

                    document.getElementById("data").innerHTML = html;
                }
            }
        </script>

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
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("datatable");

                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td0 = tr[i].getElementsByTagName("td")[0];
                    td3 = tr[i].getElementsByTagName("td")[3];
                    if (td3 || td0) {
                        var td3Value = td3.textContent || td3.innerText;
                        var td0Value = td0.textContent || td0.innerText;
                        if (td3Value.toUpperCase().indexOf(filter) > -1 || td0Value.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }

                    }
                }
            }
        </script>
        <script>
            function rowFunction(){
                var textshow = "ไปปปปปปปปปป"
                document.getElementById("show").innerHTML = textshow;
            }
        </script>
</body>

</html>