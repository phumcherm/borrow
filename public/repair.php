<?php require_once "../app/models/db.php"; ?>
<?php
require_once "../app/models/function.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>คืนวัสดุ ครุภัณฑ์</title>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
     <link rel="stylesheet" type="text/css" href="../../public/css/repair.css">
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style>

     </style>

</head>

<body>
     <?php
     include "nav_user.php";
     require_once "../app/views/session_status.php";
     ?>
     <!-- <button onclick="topFunction()" id="myBtn" title="Go to top" style="opacity: 0.5;background-color: #ff5722;width: 50px; height: 50px;"><i class="fas fa-chevron-circle-up"></i></button> -->


     <?php
     require_once "../app/views/session_status.php";
     ?>

     <form action="">
          <!--  General -->
          <div class="form-group">
               <div><!-- text-shadow:1px 2px 11px #000; -->
                    <h2 class="heading" style="color: #686060;font-family: SUT_Bold;   ">
                         กรอกรายละเอียดแจ้งซ่อม
                    </h2>
               </div>
               <!-- <b><h2 class="heading">กรอกรายละเอียดแจ้งซ่อม</h2></b> -->

               <div class="col-1-4 col-1-4-sm">
                    <div class="controls">
                         <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>" style="  max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                         <label style="border-radius: 10px;" for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;วันที่แจ้งซ่อม</label>
                    </div>
               </div>
               <div class="col-1-4 col-1-4-sm">
                    <div class="controls">

                         <select class="form-select bg-lavender" id="selectedItem" onchange="selectItemOption();" class="floatLabel" name="selectedItem" style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">

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
          <div class="col-1-2 col-1-6">
               <div class="controls">
                    <input type="text" id="name" class="floatLabel" value="<?php echo $_SESSION['fname_login'] . " " . $_SESSION['lname_login']; ?>" name="name" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label class="active" style="border-radius: 10px;" for="name">ชื่อ - สกุล</label>
               </div>
          </div>
          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="position" class="floatLabel" value="<?php echo $_SESSION['post_login']; ?>" name="position" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label class="active" style="border-radius: 10px;" for="position">ตำแหน่ง</label>
               </div>
          </div>

          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="affiliation" class="floatLabel" value="<?php echo $_SESSION['department_login']; ?>" name="affiliation" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label class="active" style="border-radius: 10px;" for="affiliation">สังกัด</label>
               </div>
          </div>
          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="Phone" class="floatLabel" value="<?php echo $_SESSION['phone_login']; ?>" name="Phone" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label class="active" style="border-radius: 10px;" for="Phone">โทรศัพท์</label>
               </div>
          </div>
          <div class="col-1-2 col-1-6">
               <div class="controls">
                    <input type="text" id="repair" class="floatLabel  " name="repair" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label style="border-radius: 10px;" for="repair" id="lb_repair">ขอแจ้งซ่อม/ตรวจสอบอุปกรณ์</label>
               </div>
          </div>
          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="commoditynumber" class="floatLabel  " name="commoditynumber" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label style="border-radius: 10px;" for="commoditynumber" id="lb_commoditynumber">หมายเลขครุภัณฑ์</label>
               </div>
          </div>

          <div class="col-1-3 col-1-6">
               <div class="controls">
                    <input type="text" id="machinenumber" class="floatLabel  " name="machinenumber" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label style="border-radius: 10px;" for="machinenumber" id="lb_machinenumber">หมายเลขเครื่อง</label>
               </div>
          </div>
          <div class="col-1-3 col-1-6-sm">
               <div class="controls">
                    <input type="text" id="brand" class="floatLabel  " name="brand" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label style="border-radius: 10px;" for="brand" id="lb_brand">ยี่ห้อ</label>
               </div>
          </div>


          <!-- <div class="col-1-2 col-1-6">
               <div class="controls">
                    <input type="text" id="active" class="floatLabel  " name="active" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label style="border-radius: 10px;" for="active">ใช้ในงาน</label>
               </div>
          </div> -->
          <div class="col-1-4 col-1-4-sm">
               <div class="controls">
                    <select class="floatLabel  " id="active" onchange="selectItemOption();" class="floatLabel" name="active" style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                         <option for="active" class="label-date">&nbsp;&nbsp;เลือกจากประวัติการยืมครุภัณฑ์</option>
                    </select>
               </div>
          </div>
          <div class="col-1-2 col-1-6">
               <div class="controls">
                    <input type="text" id="Symptoms" class="floatLabel  " name="Symptoms" required style="max-width: 100%; box-shadow: rgba(0, 0, 0, 0.10) 0px 5px 10px; ">
                    <label style="border-radius: 10px;" for="Symptoms">อาการที่พบ</label>
               </div>
          </div>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

          <button type="submit" value="Submit" class="col-1-4" style=" border-radius: 7px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px; ">Submit</button>
          <br><br>
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

                              // document.getElementById('acitive').value
                         }

                         // document.getElementById("data4").innerHTML = data;
                    }
                    selectActive();
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
     <script>
          function selectActive() {

               var selectedValues = document.getElementById("selectedItem").value;

               var dropdown = document.getElementById("active");

               console.log(selectedValues)

               var ajax = new XMLHttpRequest();
               // console.log(ajax)
               var method = "GET";
               var url = "data_repair.php";
               var data = "?selectedActive=" + selectedValues;
               var asynchronous = true;

               ajax.open(method, url + data, asynchronous);
               ajax.send();
               ajax.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                         var data = JSON.parse(this.responseText);
                         console.log(data);
                         // console.log("data");

                         for (var i = 0; i < data.length; i++) {
                              var option = document.createElement("option");
                              option.text = data[i].name;
                              option.value = data[i].id;
                              dropdown.add(option);
                         }

                         // var e = document.getElementById("active");
                         // var value = e.options[e.selectedIndex].value;
                         // var text = e.options[e.selectedIndex].text;

                         // document.getElementById('active').value
                    }

                    // document.getElementById("data4").innerHTML = data;
               }
          }
     </script>
</body>

</html>