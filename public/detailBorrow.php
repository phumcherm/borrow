<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คืนวัสดุ ครุภัณฑ์</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
    .close:focus {

        outline: 1px dotted #fff !important;
    }

    .modal-body {

        padding: 0rem !important;
    }

    .modal-title {

        color: #fff;
    }

    .modal-header {

        background: #EC5A0F;
        color: #fff !important;
    }

    .fa-close {
        color: #fff;
    }

    .heading {

        font-weight: 500 !important;
    }

    .subheadings {
        font-size: 12px;
        color: #EC5A0F;
    }


    .dots {
        height: 10px;
        width: 10px;
        background-color: green;
        border-radius: 50%;
        display: inline-block;
        margin-right: 5px;
    }

    .gallery img {

        margin-right: 10px;
    }

    .fs-9 {
        font-size: 9px;
    }

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

    /*   button {
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
                ▶ คืนวัสดุ ครุภัณฑ์
            </h2>
            <div style="max-width: 1300px; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px;">
                <h3 style="color: white;font-family: SUT_Bold;"><i class="far fa-edit"></i>ทำรายการการคืน</h3>
                <center><a href="#" style="padding-left: 40px;padding-right:40px;" type="button" data-toggle="modal" data-target="#exampleModal"> Scan QR Code</a></center>
                <br>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Appointment Informations</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                </button>
                            </div>
                            <div class="modal-body">


                                <div class="row g-0">

                                    <div class="col-md-8 border-right">

                                        <div class="status p-3">

                                            <table class="table table-borderless">

                                                <tbody>
                                                    <tr>

                                                        <td>
                                                            <div class="d-flex flex-column">

                                                                <span class="heading d-block">Hospital</span>
                                                                <span class="subheadings">Cairo Hospital</span>


                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column">

                                                                <span class="heading d-block">Time/Date</span>
                                                                <span class="subheadings">5:00PM 3-12-2020</span>


                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column">

                                                                <span class="heading d-block">Status</span>
                                                                <span class="subheadings"><i class="dots"></i> Booked</span>


                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td>
                                                            <div class="d-flex flex-column">

                                                                <span class="heading d-block">Speciality</span>
                                                                <span class="subheadings">Dental Clinic</span>


                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex flex-column">

                                                                <span class="heading d-block">Referring Doctor</span>
                                                                <span class="subheadings">Dr. Harry Pimn</span>


                                                            </div>
                                                        </td>
                                                        <td>


                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex flex-column">
                                                                <span class="heading d-block">Contact</span>
                                                                <span class="subheadings">52, Maria Block, Victoria Road, CA USA</span>
                                                            </div>
                                                        </td>

                                                        <td colspan="2">

                                                            <div class="d-flex flex-column">
                                                                <span class="heading d-block">Reason of visiting</span>
                                                                <span class="subheadings">Lorem ipsum is placeholder text commonly used in the graphic, print.</span>
                                                            </div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex flex-column">
                                                                <span class="heading d-block">Direction</span>
                                                                <span class="d-block subheadings">Get direction by using</span>
                                                                <span class="d-flex flex-row">

                                                                    <img src="https://img.icons8.com/color/100/000000/google-maps.png" class="rounded" width="30" />

                                                                    <img src="https://img.icons8.com/color/100/000000/pittsburgh-map.png" class="rounded" width="30" />

                                                                </span>

                                                            </div>
                                                        </td>

                                                        <td colspan="2">

                                                            <div class="d-flex flex-column">
                                                                <span class="heading d-block">Hospital Gallary</span>
                                                                <span class="d-flex flex-row gallery">

                                                                    <img src="https://i.imgur.com/VfRSLTm.jpg" width="50" class="rounded">
                                                                    <img src="https://i.imgur.com/jb9Cy5h.jpg" width="50" class="rounded">
                                                                    <img src="https://i.imgur.com/vBUz4HA.jpg" width="50" class="rounded">

                                                                </span>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>



                                        </div>




                                    </div>
                                    <div class="col-md-4">

                                        <div class="p-2 text-center">

                                            <div class="profile">

                                                <img src="https://i.imgur.com/VfRSLTm.jpg" width="100" class="rounded-circle img-thumbnail">

                                                <span class="d-block mt-3 font-weight-bold">Dr. Samsung Philip.</span>

                                            </div>

                                            <div class="about-doctor">

                                                <table class="table table-borderless">

                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex flex-column">

                                                                    <span class="heading d-block">Education</span>
                                                                    <span class="subheadings">University of Harward</span>


                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="d-flex flex-column">

                                                                    <span class="heading d-block">Language</span>
                                                                    <span class="subheadings">Spanish, English</span>


                                                                </div>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td>
                                                                <div class="d-flex flex-column">

                                                                    <span class="heading d-block">Organisation</span>
                                                                    <span class="subheadings">Accupunture</span>


                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="d-flex flex-column">

                                                                    <span class="heading d-block">Specialist</span>
                                                                    <span class="subheadings">Accupunture</span>


                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>

                                        </div>

                                    </div>



                                </div>



                            </div>

                        </div>
                    </div>
                </div>

                <div style="max-width: 1600px;margin-left: auto;">
                    <!-- <h2 style="padding-left: 200px;">รายละเอียดการยืม</h2> -->
                    <table class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center;">
                        <thead class="table-dark">
                            <th>
                                ลำดับ
                            </th>
                            <th>
                                รายการ
                            </th>
                            <th>
                                วันที่ยืม
                            </th>
                            <th>
                                วันที่คืน
                            </th>
                            <th>
                                สถานะ
                            </th>
                        </thead>
                        <?php for ($i = 0; $i < 5; $i++) {
                        ?>
                            <tbody>
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    สาย HDMI
                                </td>
                                <td>
                                    12-12-2565
                                </td>
                                <td>
                                    30-12-2565
                                </td>
                                <td>
                                    <center>
                                        <p style="background-color: #28a745; max-width: 100px;padding: 5px;color: white;border-radius: 7px;">คืนแล้ว</p>
                                    </center>
                                </td>
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
<!-- <script src="script.js"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>