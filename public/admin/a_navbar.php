<?php
require('../../app/models/db.php');



if (isset($_SESSION['admin_login'])) {
  $admin_id = $_SESSION['admin_login'];
  $a_stmt = $db->query("SELECT * FROM tbl_user WHERE u_id = $admin_id");
  $a_stmt->execute();
  $row = $a_stmt->fetch(PDO::FETCH_ASSOC);
}
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
  <link rel="stylesheet" href="/borrow/public/css/icons.png">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    /* TABBLE */
    @font-face {
      font-family: SUT_Regular;
      src: url(SUT-Fonts/SUT_Regular_ver_1.00.ttf);
    }

    @font-face {
      font-family: SUT_Bold;
      src: url(SUT-Fonts/SUT_Bold_ver_1.00.ttf);
    }


    body {
      font-family: SUT_Bold;
      /* margin: 0; */
    }

    * {

      font-family: SUT_Regular;
    }
  </style>
</head>
<!-- style="background-color: #E6581D;" -->

<body style="background-color: #dcdad8;">

  <!-- Top container -->
  <div class="w3-bar w3-top  w3-large  " style="z-index:4; background-color: #E6581D; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; ">
    <button class="w3-bar-item w3-button w3-hide-large  w3-hover-text-light-grey" onclick="w3_open();" style="color: #fff;"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right" style="color: #fff;">แอดมิน </span>
  </div>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse  w3-animate-left" style="z-index:3;width:250px; background-color: #E6581D; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s8 ">

        <center><img src="../../app/asset/ceit_logo.jpg" style=" box-shadow: rgba(0, 0, 0,0.70) 0px 5px 15px;  width:90px  " class="w3-circle w3-margin-right"></center>

        <br>
        <center>
          <h2 style="color: #fff;font-family: SUT_Bold;  "> &nbsp;&nbsp;E - borrow</h2>
        </center>
      </div>

      <div class="w3-col s8 w3-bar">
        <!-- <p><strong>admin </strong><br>
          คุณ<?php echo $row['name'] . ' ' . $row['surname'] ?></p> -->
        <!-- <h3>E - borrow</h3><br> -->
      </div>
    </div>
    <hr>

    <div class="w3-bar-block " style="color: #fff;">
      <a href="index.php" class="w3-bar-item w3-button w3-padding">
        <h5><i class="fas fa-home"></i> หน้าหลัก</h5>
      </a>
      <a href="a_borrow.php" class="w3-bar-item w3-button w3-padding">
        <h5><i class="fas fa-file-download"></i>  ข้อมูลยืมครุภัณฑ์</h5>
      </a>
      <a href="a_back.php" class="w3-bar-item w3-button w3-padding">
        <h5><i class="fas fa-file-upload"></i>  ข้อมูลคืนครุภัณฑ์</h5>
      </a>
      <a href="a_report.php" class="w3-bar-item w3-button w3-padding">
        <h5><i class="fas fa-file-invoice"></i>  จัดการข้อมูลครุภัณฑ์</h5>
      </a>
      <a href="a_repair.php" class="w3-bar-item w3-button w3-padding">
        <h5><i class="fas fa-tools"></i>  แจ้งซ่อมรายการครุภัณฑ์</h5>
      </a>
      <a data-id="logout" href="../login.php?logout='1'" class="w3-bar-item w3-button w3-padding">
        <h5><i class="fas fa-sign-out-alt"></i>  ออกจากระบบ</h5>
      </a>

    </div>
  </nav>


  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="  cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:250px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:36px">

    </header>



    <script>
      // Get the Sidebar
      var mySidebar = document.getElementById("mySidebar");

      // Get the DIV with overlay effect
      var overlayBg = document.getElementById("myOverlay");

      // Toggle between showing and hiding the sidebar, and add overlay effect
      function w3_open() {
        if (mySidebar.style.display === 'block') {
          mySidebar.style.display = 'none';
          overlayBg.style.display = "none";
        } else {
          mySidebar.style.display = 'block';
          overlayBg.style.display = "block";
        }
      }

      // Close the sidebar with the close button
      function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
      }
    </script>

</body>