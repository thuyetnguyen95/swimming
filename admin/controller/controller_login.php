<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password1 = isset($_POST["password"]) ? $_POST["password"] : '';
        $password = md5($password1);
        $check = fetch_one("select tts_username,tts_password,tts_fullname,tts_flag, tts_id from tts_admin where tts_username='$username'");
        if($check > 0){
            if($check["tts_password"] == $password){
                if ($check['tts_flag'] == 1) {
                    $_SESSION["username"] = $username;
                    $_SESSION["id"] = $check['tts_id'];
                    $_SESSION["tts_fullname"] = $check['tts_fullname'];
                    header("location:index.php");
                } else {
                    $msg = "Tài khoản của bạn đã bị ngừng hoạt động,<br/>Vui lòng liên hệ admin để tiếp tục.";
                }
            } else {
                $msg = "Bạn đã nhập sai mật khẩu!";
            }
            
        } else {
            $msg = "Sai tên đăng nhập hoặc mật khẩu!";
        }
    }
?>