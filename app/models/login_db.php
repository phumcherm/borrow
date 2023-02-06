<?php
session_start();
$db_host = "172.17.0.1:9906"; //202.28.34.205
$db_user = "ceitdb"; //62011211097
$db_password = "12345678"; //62011211097
$db_name = "ceitdb"; //62011211097
try {
    $pdo = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOEXCEPTION $e) {
    $e->getMessage();
}


if (isset($_POST['btn_login'])) {
    $username = $_POST['txt_code'];
    $password =  $_POST['txt_password'];

    if (empty($username)) {
        $_SESSION['error'] = 'กรุณาระบุชื่อผู้ใช้';
        header("location: ../public/admin/login.php");
    } else if (empty($password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
        header("location: ../public/admin/login.php");
    } else {
        try {

            $chechk_data = $pdo->prepare("SELECT * FROM ceitdb.tbl_user WHERE  username = :user");
            $chechk_data->bindParam(":user", $username);
            $chechk_data->execute();
            $row = $chechk_data->fetch(PDO::FETCH_ASSOC);
            if ($chechk_data->rowCount() > 0) {
                if ($username == $row['username']) {
                    if ($row['password']) {
                        if ($row['status'] == 'admin') {
                            $_SESSION['admin_login'] = $row['u_id'];
                            header("location: ../public/admin/index.php");
                        } else {
                            $_SESSION['user_login'] = $row['u_id'];
                            header("location: ../public/admin/index.php");
                        }
                    } else {
                        $_SESSION['error'] = 'รหัสผ่านผิด';
                        header("location: ../public/admin/login.php");
                    }
                } else {
                    $_SESSION['error'] = 'ไม่พบชื่อผู้ใช้ในระบบ';
                    header("location: ../public/admin/login.php");
                }
            } else {
                $_SESSION['error'] = 'ไม่พบข้อมูลในระบบ';
                header("location: ../public/admin/login.php");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
