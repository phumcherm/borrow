<?php require_once "../app/models/db.php"; ?>
<?php
require_once "../app/models/function.php";

session_start();
?>

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
</head>
<style>
     video {
          margin: 0;
          padding: 0;
          border: 0;
          font: inherit;
          font-size: 100%;
          vertical-align: baseline;
     }

     html {
          line-height: 1;
     }

     ol,
     ul {
          list-style: none;
     }

     table {
          border-collapse: collapse;
          border-spacing: 0;
     }

     caption,
     th,
     td {
          text-align: left;
          font-weight: normal;
          vertical-align: middle;
     }

     q,
     blockquote {
          quotes: none;
     }

     q:before,
     q:after,
     blockquote:before,
     blockquote:after {
          content: "";
          content: none;
     }

     a img {
          border: none;
     }

     summary {
          display: block;
     }

     /* Colors */
     /* ---------------------------------------- */
     * {
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
     }

     body {
          text-align: center;

     }


     .info-text {
          text-align: left;
          width: 100%;
     }

     header,
     form {
          padding: 4em 10%;
     }

     .form-group {
          margin-bottom: 30px;
     }

     h2.heading {
          font-size: 30px;
          text-transform: uppercase;
          font-weight: 300;
          text-align: left;
          color: #506982;
          border-bottom: 3px solid #506982;
          padding-bottom: 15px;
          margin-bottom: 50px;
     }

     .controls {
          text-align: left;
          position: relative;
     }

     .controls input[type="text"],
     .controls input[type="email"],
     .controls input[type="number"],
     .controls input[type="date"],
     .controls input[type="tel"],
     .controls textarea,
     .controls button,
     .controls select {
          padding: 20px;
          font-size: 20px;
          border: 2px solid #224C60;
          width: 100%;
          margin-bottom: 18px;
          color: #888;
          font-size: 16px;
          font-weight: 300;
          -moz-border-radius: 2px;
          -webkit-border-radius: 2px;
          border-radius: 5px;
          -moz-transition: all 0.3s;
          -o-transition: all 0.3s;
          -webkit-transition: all 0.3s;
          transition: all 0.3s;
     }

     .controls input[type="position"]:focus,
     .controls input[type="position"]:hover,
     .controls input[type="text"]:focus,
     .controls input[type="text"]:hover,
     .controls input[type="email"]:focus,
     .controls input[type="email"]:hover,
     .controls input[type="number"]:focus,
     .controls input[type="number"]:hover,
     .controls input[type="date"]:focus,
     .controls input[type="date"]:hover,
     .controls input[type="tel"]:focus,
     .controls input[type="tel"]:hover,
     .controls textarea:focus,
     .controls textarea:hover,
     .controls button:focus,
     .controls button:hover,
     .controls select:focus,
     .controls select:hover {
          outline: none;
          border-color: #224C60;
     }

     .controls input[type="position"]:focus+label,
     .controls input[type="position"]:hover+label,
     .controls input[type="text"]:focus+label,
     .controls input[type="text"]:hover+label,
     .controls input[type="email"]:focus+label,
     .controls input[type="email"]:hover+label,
     .controls input[type="number"]:focus+label,
     .controls input[type="number"]:hover+label,
     .controls input[type="date"]:focus+label,
     .controls input[type="date"]:hover+label,
     .controls input[type="tel"]:focus+label,
     .controls input[type="tel"]:hover+label,
     .controls textarea:focus+label,
     .controls textarea:hover+label,
     .controls button:focus+label,
     .controls button:hover+label,
     .controls select:focus+label,
     .controls select:hover+label {
          color: #224C60;
          cursor: text;
     }

     .controls .fa-sort {
          position: absolute;
          right: 10px;
          top: 17px;
          color: #999;
     }

     .controls select {
          -moz-appearance: none;
          -webkit-appearance: none;
          cursor: pointer;
     }

     /*text*/
     .controls label {
          position: absolute;
          left: 8px;
          top: 12px;
          width: 60%;
          color: #999;
          font-size: 16px;
          display: inline-block;
          padding: 1px 10px;
          font-weight: 100%;
          background-color: rgba(255, 255, 255, 0);
          -moz-transition: color 0.3s, top 0.3s, background-color 0.8s;
          -o-transition: color 0.3s, top 0.3s, background-color 0.8s;
          -webkit-transition: color 0.3s, top 0.3s, background-color 0.8s;
          transition: color 0.3s, top 0.3s, background-color 0.8s;
          background-color: white;
     }

     .controls label.active {
          top: -20px;
          color: #555;
          background-color: transparent;
          width: auto;
     }

     .controls textarea {
          resize: none;
          height: 200px;
     }

     /*text*/
     button {
          cursor: pointer;
          background-color: #1b3d4d;
          border: none;
          color: transparent;
          padding: 12px 0;
          float: right;
     }

     button:hover {
          background-color: #224c60;
     }

     .clear:after {
          content: "";
          display: table;
          clear: both;
     }

     .grid {
          background: white;
     }

     .grid:after {
          /* Or @extend clearfix */
          content: "";
          display: table;
          clear: both;
     }

     [class*='col-'] {
          float: left;
          padding-right: 10px;
     }

     .grid [class*='col-']:last-of-type {
          padding-right: 0;
     }

     .col-2-3 {
          width: 66.66%;
     }

     .col-1-3 {
          width: 33.33%;
     }

     .col-1-2 {
          width: 100%;
     }

     .col-1-4 {
          width: 25%;
     }

     @media (max-width: 760px) {

          .col-1-4-sm,
          .col-1-3,
          .col-2-3 {
               width: 100%;
          }

          [class*='col-'] {
               padding-right: 0px;
          }
     }

     .col-1-8 {
          width: 12.5%;
     }

     input {
          border-radius: 7px;
          border: none;
          width: auto;
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

     center a {
          background-color: #e6581d;
          color: white;
          padding: 15px 10px;
          margin-top: 15px;
          text-decoration: none;
          border-radius: 7px;
     }

     button {
          color: white;
          background-color: #e6581d;
          padding: 15px;
          border: none;
          border-radius: 7px;
     }

     a {
          color: white;
          background-color: #e6581d;
     }

     @media all and (max-width: 800px) {
          .section_area_grid {
               grid-template-columns: 1fr;
          }
     }
</style>


<body>
     <?php
     include "nav_user.php";
     require_once "../app/views/session_status.php";
     ?>
     <!-- <button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button> -->

     <?php

     if (isset($_SESSION['status'])) {
     ?>
          <div class="alert alert-warning bg-success alert-dismissible fade show" role="alert">
               <h1>
                    Hey !<?= $_SESSION['status']; ?>
               </h1>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">ปิด</button>
          </div>
     <?php
          unset($_SESSION['status']);
     }

     ?>
     <form action="">
          <!--  General -->
          <div class="form-group">
               <h2 class="heading">กรอกรายละเอียดแจ้งซ่อม</h2>ฃ
               <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                         <div class="controls">
                              <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>" style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                              <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;วันที่แจ้งซ่อม</label>
                         </div>
                    </div>

               </div>



          </div>

          <div class="col-1-2 col-1-6">
               <div class="controls">
                    <input type="text" id="name" class="floatLabel  " name="name" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="name">ชื่อ - สกุล</label>
               </div>
          </div>
          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="position" class="floatLabel  " name="position" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="position">ตำแหน่ง</label>
               </div>
          </div>

          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="affiliation" class="floatLabel  " name="affiliation" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="affiliation">สังกัด</label>
               </div>
          </div>
          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="Phone" class="floatLabel  " name="Phone" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="Phone">โทรศัพท์</label>
               </div>
          </div>
          <div class="col-1-2 col-1-6">
               <div class="controls">
                    <input type="text" id="repair" class="floatLabel  " name="repair" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="repair">ขอแจ้งซ่อม/ตรวจสอบอุปกรณ</label>
               </div>
          </div>
          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="commoditynumber" class="floatLabel  " name="commoditynumber" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="commoditynumber">หมายเลขครุภัณฑ์</label>
               </div>
          </div>

          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="machinenumber" class="floatLabel  " name="machinenumber" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="machinenumber">หมายเลขเครื่อง</label>
               </div>
          </div>

          <div class="grid">

               <div class="col-1-3 col-1-6-sm">
                    <div class="controls">
                         <input type="text" id="brand" class="floatLabel  " name="brand" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                         <label for="brand">ยี่ห้อ</label>
                    </div>
               </div>
               <div class="col-1-3 col-1-6-sm">
                    <div class="controls">
                         <input type="text" id="model" class="floatLabel  " name="model" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                         <label for="model">รุ่น</label>
                    </div>
               </div>

               <div class="col-2-3 col-1-6-sm">
                    <div class="controls">
                         <input type="text" id="active" class="floatLabel  " name="active" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                         <label for="active">ใช้ในงาน</label>
                    </div>
               </div>
          </div>
          <div class="col-1-2 col-1-6">
               <div class="controls">
                    <input type="text" id="Symptoms" class="floatLabel  " name="Symptoms" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="Symptoms">อาการที่พบ</label>
               </div>
          </div>
          <div class="col-1-4 col-1-4-sm">
               <div class="controls">
                    <select class="form-select" id="arrive" class="floatLabel" name="arrive" style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                         <option for="arrive" class="label-date"><i class="fas fa-caret-down"></i>&nbsp;&nbsp;เลือก</option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                    </select>
               </div>
          </div>

          <br><br><br><br><br><br><br><br>
 
          <button type="submit" value="Submit" class="col-1-4">Submit</button>
          </div>
          <!--  Details -->


     </form>
     <script>
          (function($) {
               function floatLabel(inputType) {
                    $(inputType).each(function() {
                         var $this = $(this);
                         // on focus add cladd active to label
                         $this.focus(function() {
                              $this.next().addClass("active");
                         });
                         //on blur check field and remove class if needed
                         $this.blur(function() {
                              if ($this.val() === '' || $this.val() === 'blank') {
                                   $this.next().removeClass();
                              }
                         });
                    });
               }
               // just add a class of "floatLabel to the input field!"
               floatLabel(".floatLabel");
          })(jQuery);
     </script>
</body>

</html>