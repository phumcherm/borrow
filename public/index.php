<?php
require_once "../app/models/Database.php";
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
$result_l = mysqli_query($con, $query); */
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
    <?php
    include "nav_user.php";
    require_once "../app/views/session_status.php";
    ?>
    
    <div style="background-color:#827A7A;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
        <div>
            <h2 style="color: #fff;font-family: SUT_Bold;">
                <i class="fa fa-caret-right" style="font-size:48px"></i>รายการครุภัณฑ์
            </h2>
        </div>
        <br>

        <center>
            <input class="w3-input " type="text" id="myInput" onkeyup="myFunction()" placeholder="Search .." style="max-width: 100%; max-height: 100%;margin: 15px;border-radius: 7px;padding: 30px;    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;" title="Type in a name">
        </center>
        <br>

        <div class='pagination-container'>
            <p Align=right>
            <nav aria-label="Page navigation example ">
                <ul class="pagination">
                    <li data-page="prev" class="page-item">
                        <a class="page-link" href="#" style=" border-color:#5B5B5B; color:#000000; ">Previous
                            <span>
                                <span class="sr-only">(current)
                                </span></a>
                    </li>
                    <li data-page="next" class="page-item">
                        <a class="page-link" href="#" style=" border-color:#5B5B5B; color:#000000;">Next
                            <span> <span class="sr-only">(current)</span></span></a>
                    </li>
                </ul>
            </nav>
            </p>


            <br><br><br>
            <p Align=right>
                <select name="state" id="maxRows" style=" border-color:#5B5B5B; box-shadow: 0px 0px 0px 6px rgba(255, 255, 255, 0.3); ">
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



        <div class="table-responsive" style="padding: 25px;">
            <div>
                <table id="datatable" class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                    <div>
                        <thead class="table-dark">
                            <th>
                                <center>Borrow ID</center>
                            </th>
                            <th>
                                <center>Item ID</center>
                            </th>
                            <th>
                                <center>รายการ</center>
                            </th>
                            <th>
                                <center>Brand</center>
                            </th>
                            <th>
                                <center>งานที่นำไปใช้</center>
                            </th>
                            <th>
                                <center>สถานที่กิจกรรม</center>
                            </th>
                            <th>
                                <center>ฝ่าย</center>
                            </th>
                            <th>
                                <center>วันที่ยืม</center>
                            </th>
                            <th>
                                <center>วันที่ต้องคืน</center>
                            </th>
                            <th>
                                <center>status</center>
                            </th>
                        </thead>

                        <tbody>
                            <?php
                            $selectBorrow = new DB_con();
                            $sql = $selectBorrow->selectBorrow();
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <td>
                                    <center><?php echo $row["br_id"] ?></center>
                                </td>
                                <td>
                                    <center> <?php echo $row["id"] ?></center>
                                </td>
                                <td>
                                    <center> <?php echo $row["detail"] ?></center>
                                </td>
                                <td>
                                    <center> <?php echo $row["brand"] ?></center>
                                </td>
                                <td>
                                    <center> <?php echo $row["activity"] ?></center>
                                </td>

                                <td>
                                    <center><?php echo $row["location"] ?></center>
                                </td>
                                <td>
                                    <center> <?php echo $row["room"] ?></center>
                                </td>
                                <td>
                                    <?php echo $row["br_time"] ?>
                                </td>
                                <td>
                                    <center><?php echo $row["br_date"] ?></center>
                                </td>
                                <td>

                                    <center>
                                        <?php
                                        if ($row["br_stat"] == 0) {
                                        ?>
                                            <p style="background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">รอดำเนินการ</p>
                                    </center>
                                <?php
                                        } else {
                                ?>
                                    <center>
                                        <p style="background-color: green;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">คืนแล้ว</p>

                                    <?php
                                        }
                                    ?>
                                    <!-- <center><?php echo $row["borrow.status"] ?></center> -->
                                    </center>
                                </td>
                                <!-- <td>
                                    <center>
                                        <p style="background-color: red;padding: 5px 10px;color: #fff;border-radius: 7px;margin: 0px;">รอดำเนินการ</p>
                                    </center>
                                </td> -->
                        </tbody>
                    <?php } ?>
                </table>
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
                td2 = tr[i].getElementsByTagName("td")[2];
                if (td2 || td0) {
                    var td2Value = td2.textContent || td2.innerText;
                    var td0Value = td0.textContent || td0.innerText;
                    if (td2Value.toUpperCase().indexOf(filter) > -1 || td0Value.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }

                }
            }
        }
    </script>

    <script>
        getPagination('#datatable');

        function getPagination(table) {
            var lastPage = 1;

            $('#maxRows')
                .on('change', function(evt) {
                    //$('.paginationprev').html('');						// reset pagination

                    lastPage = 1;
                    $('.pagination')
                        .find('li')
                        .slice(1, -1)
                        .remove();
                    var trnum = 0; // reset tr counter
                    var maxRows = parseInt($(this).val()); // get Max Rows from select option

                    if (maxRows == 5000) {
                        $('.pagination').hide();
                    } else {
                        $('.pagination').show();
                    }

                    var totalRows = $(table + ' tbody tr').length; // numbers of rows
                    $(table + ' tr:gt(0)').each(function() {
                        // each TR in  table and not the header
                        trnum++; // Start Counter
                        if (trnum > maxRows) {
                            // if tr number gt maxRows

                            $(this).hide(); // fade it out
                        }
                        if (trnum <= maxRows) {
                            $(this).show();
                        } // else fade in Important in case if it ..
                    }); //  was fade out to fade it in
                    if (totalRows > maxRows) {
                        // if tr total rows gt max rows option
                        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
                        //	numbers of pages
                        for (var i = 1; i <= pagenum;) {
                            // for each page append pagination li
                            $('.pagination #prev')
                                .before(
                                    '<li data-page="' +
                                    i +
                                    '">\
								  <span>' +
                                    i++ +
                                    '<span class="sr-only">(current)</span></span>\
								</li>'
                                )
                                .show();
                        } // end for i
                    } // end if row count > max rows
                    $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
                    $('.pagination li').on('click', function(evt) {
                        // on click each page
                        evt.stopImmediatePropagation();
                        evt.preventDefault();
                        var pageNum = $(this).attr('data-page'); // get it's number

                        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

                        if (pageNum == 'prev') {
                            if (lastPage == 1) {
                                return;
                            }
                            pageNum = --lastPage;
                        }
                        if (pageNum == 'next') {
                            if (lastPage == $('.pagination li').length - 2) {
                                return;
                            }
                            pageNum = ++lastPage;
                        }

                        lastPage = pageNum;
                        var trIndex = 0; // reset tr counter
                        $('.pagination li').removeClass('active'); // remove active class from all li
                        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
                        // $(this).addClass('active');					// add active class to the clicked
                        limitPagging();
                        $(table + ' tr:gt(0)').each(function() {
                            // each tr in table not the header
                            trIndex++; // tr index counter
                            // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
                            if (
                                trIndex > maxRows * pageNum ||
                                trIndex <= maxRows * pageNum - maxRows
                            ) {
                                $(this).hide();
                            } else {
                                $(this).show();
                            } //else fade in
                        }); // end of for each tr in table
                    }); // end of on click pagination list
                    limitPagging();
                })
                .val(5)
                .change();

            // end of on select change

            // END OF PAGINATION
        }

        function limitPagging() {
            // alert($('.pagination li').length)

            if ($('.pagination li').length > 7) {
                if ($('.pagination li.active').attr('data-page') <= 3) {
                    $('.pagination li:gt(5)').hide();
                    $('.pagination li:lt(5)').show();
                    $('.pagination [data-page="next"]').show();
                }
                if ($('.pagination li.active').attr('data-page') > 3) {
                    $('.pagination li:gt(0)').hide();
                    $('.pagination [data-page="next"]').show();
                    for (let i = (parseInt($('.pagination li.active').attr('data-page')) - 2); i <= (parseInt($('.pagination li.active').attr('data-page')) + 2); i++) {
                        $('.pagination [data-page="' + i + '"]').show();

                    }

                }
            }
        }
    </script>
</body>

</html>