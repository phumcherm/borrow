<?php
session_start();
require_once "../../app/models/function.php";
// if(isset($_POST['submit'])){
//     $txt_code = $_POST['txt_code'];
//     $txt_password = $_POST['txt_password'];

// $row = ['user:'];

if (isset($_POST['submit'])) {
    $username = $_POST['txt_code'];
    $password = $_POST['txt_password'];


    if (empty($username)) {
        $_SESSION['error'] = 'กรุณากรอกอีเมล';
        header("location: /public/login.php");
    } else if (empty($password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
        header("location: /public/login.php");
    }
    try {

        // $check_data = $conn->prepare("SELECT * FROM member WHERE username = :username");
        // $check_data->bindParam(":username", $username);
        // $check_data->execute();
        // $row = $check_data->fetch(PDO::FETCH_ASSOC);
        $selectUserWhere = new DB_con();
        $sql = $selectUserWhere->selectUserWhere($username);
        $row = mysqli_fetch_array($sql);
        // $count = count($row);
        // if ($sql->mysql_fetch_object > 0) {
        if ($row !== null) {
            if ($username == $row['user_name']) {
                if (($password == $row['user_pass'])) {
                    if ($row['fname'] == 'วิษณุ' && $row['lname'] == 'กุหลาบ') {
                        $_SESSION['admin_login'] = $row['user_id'];
                        $_SESSION['id_login'] = $row['user_id'];
                        $_SESSION['user_login'] = $row['user_name'];
                        $_SESSION['pass_login'] = $row['user_pass'];
                        $_SESSION['fname_login'] = $row['fname'];
                        $_SESSION['lname_login'] = $row['lname'];
                        $_SESSION['post_login'] = $row['post'];
                        $_SESSION['department_login'] = $row['department'];
                        $_SESSION['phone_login'] = $row['phone_num'];
                        header("location: /public/admin/index.php");
                    } else {
                        $_SESSION['id_login'] = $row['user_id'];
                        $_SESSION['user_login'] = $row['user_name'];
                        $_SESSION['pass_login'] = $row['user_pass'];
                        $_SESSION['fname_login'] = $row['fname'];
                        $_SESSION['lname_login'] = $row['lname'];
                        $_SESSION['post_login'] = $row['post'];
                        $_SESSION['department_login'] = $row['department'];
                        $_SESSION['phone_login'] = $row['phone_num'];
                        header("location: /public/index.php");
                    }
                    $_SESSION['loginstatus'] = 1;
                } else {
                    $_SESSION['error'] = 'รหัสผ่านผิด';
                    header("location: /public/login.php");
                }
            } else {
                $_SESSION['error'] = 'อีเมลผิด';
                header("location: /public/login.php");
            }
        } else {
            $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
            header("location: /public/login.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    echo "ข้อมูลไม่มา";
}

    // if($txt_code == 'admin12345678' &&  $txt_password == 'ceit1234567'){
    //     // echo "success";
    //     $_SESSION['admin'] = $txt_code;
    //     header("location: /public/admin/index.php");

    // } elseif($txt_code == 'ceit012345678' &&  $txt_password == 'ceit1234567') {

    //     $_SESSION['admin'] = $txt_code;
    //     header("location: /public/index.php");
    // } else {

    //     echo "ไม่มา";
    // }
// }else {
//     echo "ข้อมูลไม่มา";
// }
