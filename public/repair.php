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
     <link rel="stylesheet" type="text/css" href="../../public/css/repair.css">
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

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
                              <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
                              <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;วันที่แจ้งซ่อม</label>
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
               <br><br><br><br><br>
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