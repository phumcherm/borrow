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
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
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
</style>

<body>

    <button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button>
    <!-- <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button> -->
    <?php
    include "nav_admin.php";
    ?>

    <div>

        <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px;">
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ ยืมวัสดุ ครุภัณฑ์
            </h2>
            <div style="max-width: 1300px; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px;">
                <h3 style="color: white;font-family: SUT_Bold;"><i class="far fa-edit"></i>ทำรายการ</h3>
                <form action="">
                    
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

                    
                    <br>
                    <button type="submit">ยืนยันทั้งหมด</button>
                </form>
            </div>
            <br>

        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>