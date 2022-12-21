<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยืมวัสดุ ครุภัณฑ์</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="./node_modules/html5-qrcode/html5-qrcode.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

    a:hover {
        background-color: #dbd6d6;
        color: white;
        text-decoration: none;
    }

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
</style>

<body>
    
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <?php
    include "nav.php";
    ?>

    <div>

        <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px;">
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ ยืมวัสดุ ครุภัณฑ์
            </h2>
            <div style="max-width: 1300px; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px;">
                <h3 style="color: white;font-family: SUT_Bold;"><i class="far fa-edit"></i>ทำรายการ</h3>
                <form action="">
                    <style>
                        main {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        #reader {
                            width: 600px;
                        }

                        #result {
                            text-align: center;
                            font-size: 1.5rem;
                        }
                    </style>
                    <main>
                        <div id="reader"></div>
                        <div id="result"></div>
                    </main>
                    <script>
                        const scanner = new Html5QrcodeScanner('reader', {
                            qrbox: {
                                width: 250,
                                height: 250,
                            },
                            fps: 20,
                        });
                        scanner.render(success, error);

                        function success(result) {
                            var itemCode = document.getElementById("result");
                            document.getElementById('result').innerHTML = `
                                <h2>Success!</h2>
                                <a href="borrow.php?code=${result}"> ${result}</a>
                                `;

                            // var itemCode = $result
                            // document.getElementById("demo").innerHTML = (result);
                            // document.(itemCode);
                            scanner.clear();
                            document.getElementById('reader').remove();
                            // echo  (itemCode);
                        }

                        function error(err) {
                            console.error(err);
                        }
                        <?php echo "หวัดดี"  ?>
                    </script>
                    <!-- <center><a href="#"> Scan QR Code</a></center> -->
                    <? 

                    if (isset( $_GET['code'])) {
                        echo $_GET['code']; 
                    }?>
                    <br>
                    <center>

                        <input class="w3-input" type="text" required placeholder="ระบุงานที่จะนำไปใช้ทำกิจกรรม" style="max-width: 500px;">
                        <div class="section_area_grid">
                            <div class="section_grid_bor">
                                <div class="section_grid_item">
                                    <!-- <h5 style="padding-left: 0;">ระบุสถานที่<h5> -->
                                    <br>
                                    <input class="w3-input w3-animate-input  demo" type="text" required placeholder="ระบุสถานที่" style="max-width: 400px;">
                                </div>
                            </div>
                            <!-- <p id="demo">CODE</p> -->
                            <div class="section_grid_bor">
                                <div class="section_grid_item">
                                    <h5>วันที่คืน*</h5>
                                    <input class="w3-input w3-animate-input" style="max-width: 400px;" type="date" id="date" name="date" required>
                                </div>
                            </div>
                        </div>
                    </center>
                    <div style="max-width: 1600px;margin-left: auto;">
                        <!-- <h2 style="padding-left: 200px;">รายละเอียดการยืม</h2> -->
                        <table class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;">
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
                            <?php for ($i = 0; $i < 5; $i++) {
                            ?>
                                <tbody>
                                    <td>
                                        <center><?php echo $i ?></center>
                                    </td>
                                    <td>
                                        <center>สาย HDMI </center>
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
                            <?php } ?>
                        </table>
                    </div>
                    <br>
                    <button type="submit">ยืนยันทั้งหมด</button>
                </form>
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
<!-- <script src="script.js"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>