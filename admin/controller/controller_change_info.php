<?php
    $adminID = $_SESSION['id'];
    $arr = fetch_one("select * from tts_admin where tts_id = $adminID");
    $msg = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = mysql_escape_string($_POST["username"]);
        $fullname = mysql_escape_string($_POST["fullname"]);

        $msg = "<p style='color: red'>Mật khẩu không đúng!</p>";
        if (md5($_POST['password']) == $arr['tts_password']) {
            execute("update tts_admin set tts_username='$username',tts_fullname='$fullname' where tts_id = $adminID");
            if ($arr['tts_username'] == $username) {
                header('location: index.php?controller=home');
            } else {
                header('location: index.php?controller=logout');
            }
        }
    }
    include "view/view_change_info.php";
?>