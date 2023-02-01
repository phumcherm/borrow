<?php 
session_start();

if(isset($_POST['submit'])){
    $txt_code = $_POST['txt_code'];
    $txt_password = $_POST['txt_password'];

// $row = ['user:'];

    if($txt_code == 'admin12345678' &&  $txt_password == 'ceit1234567'){
        // echo "success";
        $_SESSION['admin'] = $txt_code;
        header("location: /public/admin/index.php");

    } elseif($txt_code == 'ceit012345678' &&  $txt_password == 'ceit1234567') {

        $_SESSION['admin'] = $txt_code;
        header("location: /public/index.php");
    } else {

        echo "ไม่มา";
    }
}
?>