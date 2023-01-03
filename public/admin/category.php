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

    .dropbtn {
        background-color: #ff5722;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* Dropdown button on hover & focus */
    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #ff5722;
    }

    /* The search field */
    #myInput {
        box-sizing: border-box;
        background-image: url('searchicon.png');
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 14px 20px 12px 45px;
        border: none;
        border-bottom: 1px solid #ddd;
    }

    /* The search field when it gets focus/clicked on */
    #myInput:focus {
        outline: 3px solid #ddd;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f6f6f6;
        min-width: 230px;
        border: 1px solid #ddd;
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ff5722
    }

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {
        display: block;
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
    require "nav_admin.php";
    ?>

    <div>

        <div style="background-color: #dbd6d6;width: auto; height: auto;margin: 15px;border-radius: 7px;padding: 30px;">
            <h2 style="color: #ff5722;font-family: SUT_Bold;">
                ▶ หมวดหมู่วัสดุ ครุภัณฑ์
            </h2>
            <div style="max-width: 1300px; margin: 15px auto 15px auto;background-color: #b3abab; border-radius: 7px;padding: 30px;">


                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">เลือกหมวดหมู่</button>
                    <div id="myDropdown" class="dropdown-content">
                       
                        <a href="#about">วัสดุ</a>
                        <a href="#base">ครุภัณฑ์</a>
                        
                    </div>

                </div>
<br><br><br>

                <div style="max-width: 1600px;margin-left: auto;">
                    <!-- <h2 style="padding-left: 200px;">รายละเอียดการยืม</h2> -->
                    <table class="table" style="max-width: 1200px;margin: auto; padding: 16px;background-color: white;border-radius: 7px;text-align: center;">
                        <thead class="table-dark">
                            <th>
                                ลำดับ
                            </th>
                            <th>
                                หมวดหมู่
                            </th>
                            <th>
                                รายการ
                            </th>
                            <th>
                                ยี่ห้อ
                            </th>
                            <th>
                                รุ่น
                            </th>
                            
                        </thead>
                        <?php for ($i = 0; $i < 5; $i++) {
                        ?>
                            <tbody>
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>
                                    วัสดุ
                                </td>
                                <td>
                                <a href="detailcategory.php">
                                            โทรทัศน์ 
                                    </a> 
                                </td>
                                <td>
                                    SONY
                                </td>
                                <td>
                                    A123
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
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
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