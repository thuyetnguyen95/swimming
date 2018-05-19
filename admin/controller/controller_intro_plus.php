<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tts_intro_plus where id = $id");
            header("location:index.php?controller=intro_plus");
            break;

        case 'add':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['content'])) {
                    $content = $_POST['content'];
                    $sql = "insert into tts_intro_plus(content) values('$content')";
    
                    execute($sql);
                    header("location:index.php?controller=intro_plus");
                }
            }
            break;

        case 'edit':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $introEdit = fetch_one("select * from tts_intro_plus where id = $id");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['content'])) {
                    // $title = $_POST['title'];
                    $content = $_POST['content'];
                    $sql = "update tts_intro_plus set content = '$content' where id=$id";
        
                    execute($sql);
                    header("location:index.php?controller=intro_plus");
                }
            }
            break;
        default: break;
    }
    
    $intro_plus = fetch_one("select * from tts_intro_plus where flag = 1 order by id desc");
    $hasIntro_plus = (isset($intro_plus)) ? true : false;
    // load view
    include "view/view_intro_plus.php";
?>