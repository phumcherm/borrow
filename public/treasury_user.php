<?php

session_start();
require_once "../app/models/function.php";
require_once "../app/models/db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>E - Borrow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-R0nsdNty9v+t8xk+FdQyt/VDlz0cIJb/gNcOwWlI7idKbQkZmJduPr9m67pYcfYxsOKO/hyJwV5vy5ikfmkKjA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/icons.png');
            background-position: 2px 5px;
            background-repeat: no-repeat;
            height: 20%;
            width: 50%;
            font-size: 20px;
            padding: 5px 5px 5px 5px;

            margin-bottom: 30px;
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


        .pagination li:hover {
            cursor: pointer;
        }
    </style>

</head>

<body>
    <?php
    include "nav_user.php";
    ?>
    <div id="grad" style="background-color:#827A7A;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
        <div>

            <h2 style="color: #fff;font-family: SUT_Bold;  text-shadow:2px 3px 10px #000;">
                <i class="fa fa-caret-right" style="font-size:48px"></i>&nbsp;&nbsp;&nbsp;รายการครุภัณฑ์

            </h2>
        </div>
        <br>
        <center>
            <input class="w3-input " type="text" id="myInput" onkeyup="myFunction()" placeholder="Search .." style="margin: 15px;border-radius: 50px;padding: 13px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;" title="Type in a name">
        </center>
        <br>
        <div class='pagination-container'>
            <p Align=right>
            <nav aria-label="Page navigation example">
                <ul class="pagination" style="box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px;">
                    <li data-page="prev" class="page-item">
                        <a class="page-link" href="#" style=" border-color:#5B5B5B; color:#434242; "><b><i class="fas fa-angle-left"></i>Previous</b>
                            <span>
                                <span class="sr-only">(current)
                                </span></a>
                    </li>
                    <li data-page="next" class="page-item">
                        <a class="page-link" href="#" style=" border-color:#5B5B5B; color:#434242;"><b>Next&nbsp;&nbsp;<i class="fas fa-angle-right"></i></b>
                            <span> <span class="sr-only">(current)</span></span></a>
                    </li>
                </ul>
            </nav>
            </p>




            <br><br><br>
            <p Align=right>
                <select name="state" id="maxRows" style=" border-color:#5B5B5B; border-radius: 5px; box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 10px; ">
                    <option value="5000">Show ALL Rows</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="70">70</option>
                    <option value="100">100</option>
                </select>
            </p>

        </div>

        <!-- Button to open modal -->
        <button id="open-modal">Open Modal</button>


        <!-- Modal -->
        <div id="modal" class="modal">
            <div class="modal-content" style="padding: 10px; background-color: #ff5722;">
                <div>
                    <div style="max-width: 1600px;margin-left: auto; background-color: #e8e3e3;padding: 30px;border-radius: 7px;">
                        <span class="close" style="margin-left: auto;color: black;background-color: white;padding: 1px 7px;border-radius: 7px;"><i class="fa-solid fa-xmark"></i></span>

                        <!-- <form action=""> -->

                        <center>
                            <h2 style="color: black;">รายละเอียดวัสดุ / ครุภัณฑ์ <i class="fa-sharp fa-solid fa-xmark"></i></h2>
                            <div class="table-responsive" style="padding: 25px;">
                                <div>
                                    <table id="datatable2" class="table" style="text-align: center;">
                                        <thead style="color:white; background-color:#E6581D; ">
                                            <th>
                                                <center>ชื่อครุภัณฑ์</center>
                                            </th>
                                            <th>
                                                <center>ยี่ห้อ/รุ่น</center>
                                            </th>
                                            <th>
                                                <center>จำนวน</center>
                                            </th>
                                            <!-- <!-- <th>
                                <center>สถานะการยืม</center>
                            </th> -->
                                            <th>
                                                <center>เลือก</center>
                                            </th>
                                        </thead>

                                        <tbody id="result">


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </center>

                        <!-- </form> -->

                    </div>

                    <div id="result"></div>
                </div>
            </div>
        </div>

        <div class="table-responsive" style="padding: 25px;">
            <div>
                <table id="datatable" class="table" style="text-align: center;">
                    <thead style="color:white; background-color:#E6581D; ">
                        <th>
                            <center>ชื่อครุภัณฑ์</center>
                        </th>
                        <th>
                            <center>ยี่ห้อ/รุ่น</center>
                        </th>
                        <th>
                            <center>จำนวน</center>
                        </th>
                        <!-- <!-- <th>
                                <center>สถานะการยืม</center>
                            </th> -->
                        <th>
                            <center>เลือก</center>
                        </th>
                    </thead>

                    <tbody>

                        <?php
                        $selectCountMatchTreasury = new DB_con();
                        $sql = $selectCountMatchTreasury->selectCountMatchTreasury();
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td data-label="ชื่อครุภัณฑ์.">
                                    <center><?php echo $row["detail"] ?></center>
                                </td>
                                <td data-label="ยี่ห้อ.">
                                    <center> <?php echo $row["brand"] ?></center>
                                </td>
                                <td data-label="จำนวน.">
                                    <center><?php echo $row["matching_rows"] . " / " . $row["total_rows"] ?></center>
                                </td>
                                <!-- <td data-label="สถานะการยืม.">
                                    <center>
                                        <?php if ($row['br_status'] == '') { ?>
                                             <?php echo $row["br_status"] ?>
                                            <p style="background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">ว่าง</p>
                                        <?php } elseif ($row['br_status'] == 0) { ?>
                                            <p style="background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">ไม่ว่าง</p>
                                        <?php } else { ?>
                                            <p style="background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">ว่าง</p>
                                        <?php } ?>
                                    </center>
                                </td>
                                <td data-label="สถานะการใช้งาน.">
                                    <center><?php if ($row['item_status'] == "ใช้งานได้") {
                                                echo "<p style='background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;'>ใช้งานได้</p>";
                                            } elseif ($row['item_status'] == "ชำรุดรอการซ่อม") {
                                                echo "<p style='background-color: #ffcc00;padding: 5px 10px;color: black;border-radius: 7px;margin: 0px;'>ชำรุดรอการซ่อม</p>";
                                            } else {
                                                echo "<p style='background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;'>" . $row['item_status'] . "</p>";
                                            }  ?>
                                    </center>
                                </td> -->
                                <td><input type="checkbox" name="selected[]" value="<?php echo $row['detail'] ?>"></td>
                            </tr>
                    </tbody>
                <?php } ?>
                <script>
                    function highlightRow(row) {
                        // Toggle highlight class on row
                        row.classList.toggle('highlight');

                        // Toggle checkbox state
                        var checkbox = row.querySelector('input[type="checkbox"]');
                        checkbox.checked = !checkbox.checked;
                    }
                </script>
                </table>

            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }
    </script>

    <script>
        // get the table and checkboxes
        var table = document.getElementById("datatable");
        var checkboxes = table.querySelectorAll('input[type=checkbox]');

        // add event listener to each checkbox
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('click', function() {
                // get the checked rows data
                var selectedRows = [];
                checkboxes.forEach(function(checkbox) {
                    if (checkbox.checked) {
                        var row = checkbox.parentNode.parentNode;
                        var id = row.cells[0].innerText;
                        var name = row.cells[1].innerText;
                        // var email = row.cells[2].innerText;
                        selectedRows.push({
                            id: id,
                            name: name
                            // email: email
                        });
                    }
                });

                // show the selected rows data as an array
                if (selectedRows.length > 0) {
                    var resultHtml = "<tr>";
                    selectedRows.forEach(function(row) {
                        resultHtml += "<td>" + row.id + "</td>";
                        resultHtml += "<td>" + row.name + "</td>";
                        resultHtml += "</tr>";
                        document.getElementById("result").innerHTML = resultHtml;


                    });
                } else {
                    document.getElementById("result").innerHTML = "";
                }
            });
        });
    </script>
    <script>
        //////////////////////////////////////// เปิด / ปิด Modal /////////////////////////////////
        // Get the modal element
        var modal = document.getElementById("modal");

        // Get the button that opens the modal
        var btn = document.getElementById("open-modal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        // btn.onclick = function() {
        //     modal.style.display = "block";
        // }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            // ModalNull()
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                // ModalNull()
            }
        }
    </script>
</body>

</html>