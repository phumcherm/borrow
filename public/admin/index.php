
<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../public/css/style.css">
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
                <table id="datatable" class="table">
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
                        $select_stmt = $db->prepare("SELECT * FROM itemdata");

                        $select_stmt->execute();

                        while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <td>
                                <center><?php echo $row["id"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["updateTime"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["itemCode"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["detail"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["checkInDate"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["brand"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["serialNumber"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["price"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["refDoc"] ?></center>
                            </td>
                            <td>
                                <center><?php echo $row["room"] ?></center>
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
                        <td>
                            <center><?php echo $row["active"] ?></center>
                        </td> -->
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