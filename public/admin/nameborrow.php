<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คืนวัสดุ ครุภัณฑ์</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<style>
    input {
        border-radius: 7px;
        border: none;
        width: 200px;
        height: 40px;
        padding: 20px;
        margin: 15px auto 15px auto;
        text-align: center;
    }

    .blocktext {
        margin-left: auto;
        margin-right: auto;
        width: auto;
    }

    /* a:hover {
        background-color: #dbd6d6;
        color: white;
        text-decoration: none;
    }*/

    center a {
        background-color: #ff5722;
        color: white;
        padding: 15px 10px;
        margin-top: 15px;
        text-decoration: none;
        border-radius: 7px;
    }

    button {
        color: white;
        background-color: #ff5722;
        padding: 15px;
        border: none;
        border-radius: 7px;
    }

    a {
        color: white;
    }

    @media all and (max-width: 800px) {
        .section_area_grid {
            grid-template-columns: 1fr;
        }
    }

    /* center a:hover {
        background-color: #ffa185;
    } */


    li {
        color: #000;
        cursor: pointer;
    }
</style>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <?php
    require "nav_admin.php";
    ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: #fff;">
            <li class="breadcrumb-item active"><a href="report_admin.php">หน้าเเรกรายงาน</a></li>
            <li class="breadcrumb-item "><a href="nameborrow.php">รายชื่อผู้ยืม</a></li>

        </ol>
    </nav>

    <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
        <h2 style="color: #ff5722;font-family: SUT_Bold;">
            <i class="fa fa-caret-right" style="font-size:48px"></i> รายชื่อผู้ยืม
        </h2>
        <div style="max-width: 1300px; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
            <div class="table-responsive">

                <div style="max-width: 1600px;margin-left: auto;">
                    <!-- <h2 style="padding-left: 200px;">รายละเอียดการยืม</h2> -->
                    <table class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;">
                        <thead class="table-dark">
                            <th>
                                ลำดับ
                            </th>
                            <th>
                                รายชื่อ
                            </th>
                            <th>
                                ฝ่าย
                            </th>

                        </thead>
                        <?php for ($i = 1; $i < 6; $i++) {
                        ?>
                            <tbody>
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    <a href="detailname.php">
                                        เปรมฤทัย สีแปลก
                                    </a>

                                </td>
                                <td>
                                    เทคนิควิศวกรรม
                                </td>

                                <!--  <td>
                                    <center>
                                        <p style="background-color: #28a745; max-width: 100px;padding: 5px;color: white;border-radius: 7px;">คืนแล้ว</p>
                                    </center>
                                </td> -->
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
                <br>
            </div>
            <br>


        </div>

    </div>


</body>
<script>
    // Get the button
    // let mybutton = document.getElementById("myBtn");

    // // When the user scrolls down 20px from the top of the document, show the button
    // window.onscroll = function() {
    //     scrollFunction()
    // };

    // function scrollFunction() {
    //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //         mybutton.style.display = "block";
    //     } else {
    //         mybutton.style.display = "none";
    //     }
    // }

    // // When the user clicks on the button, scroll to the top of the document
    // function topFunction() {
    //     document.body.scrollTop = 0;
    //     document.documentElement.scrollTop = 0;
    // }
</script>

<script>
    $(document).ready(function() {

        $('.second ol li a.active-2 span').css({
            'border-bottom': '3px solid rgb(0, 183, 255) ',
            'padding-bottom': ' 21px  '
        });

        $('.second ol li a').click(function() {
            $('.second ol li a.active-2 span').css('padding-bottom', '0px');
            $('.second ol li a.active-2 span').css('border-bottom', 'none');
            $('.second ol li a.active-2').removeClass('active-2');
            $(this).closest('a').find('span').css('padding-bottom', ' 21px  ');
            $(this).closest('a').find('span').css('border-bottom', '3px solid rgb(0, 183, 255) ');
            $(this).closest('a').addClass('active-2');
        });


    });
</script>

<!-- <script src="script.js"></script> -->


</html>