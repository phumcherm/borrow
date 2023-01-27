<?php
require_once "../app/models/Database.php";
require_once "../app/models/function.php";
// require_once "../app/models/Database.php";

// $con = mysqli_connect("172.17.0.1:9906", "ceitdb", "12345678", "ceitdb");

?>
<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/borrow/public/css/style.css">
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
    include "nav_user.php";
    ?>


    <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px;">
        <div>
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ ยืม-คืนล่าสุดของคุณ
            </h2>
        </div>
        <br>
        <div style="max-width: 1600px;margin-left: auto;">
            <div>
                <li class="items "><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Game Name.." title="Type in a name"></li>

                <table id="datatable" class="table">
                    <thead class="table-dark">
                        <center>
                            <th>
                                id
                            </th>
                            <th>
                                updateTime
                            </th>
                            <th>
                                itemCode
                            </th>
                            <th>
                                detail
                            </th>
                            <th>
                                checkInDate
                            </th>
                            <th>
                                brand
                            </th>
                            <th>
                                serialNumber

                            </th>
                            <th>
                                price
                            </th>
                            <th>
                                refDoc
                            </th>
                            <th>
                                room
                            </th>
                        </center>
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
                    <button id="plus" style="background-color: #ff5722;padding: 10px 40px;font-size: 30px;" onclick="">+</button>
                </center>

                <div>
                    <h1 id="show">ไปปปป</h1>
                </div>
            </div>
        </div>
        <script src="lolo.js"></script>

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
            let numb5 = 5
            // $(document).ready(function() {
            //     $("#plus").click(function() {
            //         $.ajax({
            //             url: 'data.php', //This is the current doc
            //             // type: "GET",
            //             // dataType: 'html', // add json datatype to get json
            //             // data:"numb="+5,
            //             data: 'numb=' + numb5,
            //             success: function(data) {
            //                 // console.log(data)
            //                 tableFunc()
            //                 $('#show').html(data);
            //                 // console.log(data);
            //             }
            //         });
            //     });
            // });

            $('#plus').click(function(){
                $.ajax({
                        url: 'data3.php',
                        data: 'numb=' + numb5,
                        success: function(data) {
                            tableFunc()
                            $('#show').html(data);
                            // console.log(data);
                        }
                    });
            })
            
        </script>

</body>

</html>