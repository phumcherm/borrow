<?php
/* require_once "../app/models/Database.php"; */
require_once "../app/models/function.php";
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
    <link rel="stylesheet" href="css/style.css">

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
                <i class="fa fa-caret-right" style="font-size:48px"></i>รายการวัสดุและครุภัณฑ์
            </h2>
        </div>

       
        <center>
            <input class="w3-input " type="text" id="myInput" onkeyup="myFunction()" placeholder="Search .." style="max-width: 100%; max-height: 100%;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;" title="Type in a name">
        </center>
     
        <br>
        <div class="table-responsive">
            <div >
                <table  id="datatable" class="table  class="table"  style="width: 100%; height: 100%;margin-left: auto;background-color: white; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px; border-radius: 7px;">
                    <div>
                     
                            <thead class="table-dark">
                                <th>
                                    <center>ลำดับ</center>
                                </th>


                                <th>
                                    <center>รายการ</center>
                                </th>
                                <th>
                                    <center>ยี่ห้อ / รุ่น</center>
                                </th>

                                <th>
                                    <center>ห้อง</center>
                                </th>
                                <th>
                                    <center>สถานะ</center>
                                </th>
                                <!-- <th>
                            <center>status</center>
                        </th>
                        <th>
                            <center>notation</center>
                        </th>
                        <th>
                            <center>misConfirmer</center>
                        </th>
                        <th>
                            <center>organization</center>
                        </th>
                        <th>
                            <center>type</center>
                        </th>
                        <th>
                            <center>active</center>
                        </th> -->

                            </thead>

                            <tbody>
                                <?php


                                $selectAll = new DB_con();
                                $sql = $selectAll->selectAll();
                                while ($row = mysqli_fetch_array($result_l)) {
                                ?>
                                    <td>
                                        <center><?php echo $row["id"] ?></center>
                                    </td>


                                    <td>
                                        <center><?php echo $row["detail"] ?></center>
                                    </td>

                                    <td>
                                        <center><?php echo $row["brand"] ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $row["room"] ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo $row["status"] ?></center>
                                    </td>
                                    <!-- <td>
                            <center><?php echo $row["status"] ?></center>
                        </td>
                        <td>
                            <center><?php echo $row["notation"] ?></center>
                        </td>
                        <td>
                            <center><?php echo $row["misConfirmer"] ?></center>
                        </td>
                        <td>
                            <center><?php echo $row["organization"] ?></center>
                        </td>
                        <td>
                            <center><?php echo $row["type"] ?></center>
                        </td>
                         -->
                            </tbody>
                        <?php } ?>
                        </table>
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
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("datatable");

                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
</body>

</html>