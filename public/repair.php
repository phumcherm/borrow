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
               <h2 class="heading">กรอกรายละเอียดแจ้งซ่อม</h2>
               <div class="grid">
                    <div class="col-1-4 col-1-4-sm">
                         <div class="controls">
                              <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>" style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                              <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;วันที่แจ้งซ่อม</label>
                         </div>
                    </div>

                    <div class="col-1-4 col-1-4-sm">
                         <div class="controls">

                              <select class="form-select" id="selectedItem" onchange="selectItemOption();" class="floatLabel" name="selectedItem" style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">

                                   <option for="arrive" class="label-date">&nbsp;&nbsp;เลือกจากประวัติการยืมครุภัณฑ์</option>
                                   <?php $selectBorrowItem = new DB_con();
                                   $sql = $selectBorrowItem->selectBorrowItem();
                                   while ($row = mysqli_fetch_array($sql)) { ?>
                                        <option value="<?php echo $row['br_id'] ?>"><?php echo $row['detail'], $row['brand'] ?></option>
                                   <?php } ?>
                              </select>

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
                    <label for="repair" id="lb_repair">ขอแจ้งซ่อม/ตรวจสอบอุปกรณ์</label>
               </div>
          </div>
          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="commoditynumber" class="floatLabel  " name="commoditynumber" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="commoditynumber" id="lb_commoditynumber">หมายเลขครุภัณฑ์</label>
               </div>
          </div>

          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="machinenumber" class="floatLabel  " name="machinenumber" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label for="machinenumber" id="lb_machinenumber">หมายเลขเครื่อง</label>
               </div>
          </div>

          <div class="grid">

               <div class="col-1-3 col-1-6-sm">
                    <div class="controls">
                         <input type="text" id="brand" class="floatLabel  " name="brand" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                         <label for="brand" id="lb_brand">ยี่ห้อ</label>
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

          <!-- <select name="" id="" class="form-control custom-select " style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
               <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Destination</label>
               <option value="">Peru</option>
               <option value="">Japan</option>
               <option value="">Thailand</option>
               <option value="">Brazil</option>
               <option value="">United States</option>
               <option value="">Israel</option>
               <option value="">China</option>
               <option value="">Russia</option>
          </select>
          </div>
          </div> -->
          <br><br><br><br><br><br><br><br>

          <button type="submit" value="Submit" class="col-1-4" style="  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px; ">Submit</button>
          </div>
          <!--  Details -->

          <script>
               function selectItemOption() {
                    var selectedValues = document.getElementById("selectedItem").value;

                    console.log(selectedValues)

                    var ajax = new XMLHttpRequest();
                    // console.log(ajax)
                    var method = "GET";
                    var url = "data4.php";
                    var data = "?selectedValues=" + selectedValues;
                    var asynchronous = true;

                    ajax.open(method, url + data, asynchronous);
                    ajax.send();
                    ajax.onreadystatechange = function() {
                         if (this.readyState == 4 && this.status == 200) {
                              var data = JSON.parse(this.responseText);
                              console.log(data);
                              // console.log("data");

                              document.getElementById('repair').value = data.detail;
                              document.getElementById('lb_repair').classList.add("active");

                              document.getElementById('commoditynumber').value = data.itemCode;
                              document.getElementById('lb_commoditynumber').classList.add("active");

                              document.getElementById('machinenumber').value = data.serialNumber;
                              document.getElementById('lb_machinenumber').classList.add("active");

                              document.getElementById('brand').value = data.brand;
                              document.getElementById('lb_brand').classList.add("active");
                         }

                         // document.getElementById("data4").innerHTML = data;
                    }
               }
          </script>

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