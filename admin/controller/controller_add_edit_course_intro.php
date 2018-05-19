<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tts_intro_plus where id = $id");
            header("location:index.php?controller=course");
            break;

        case 'add':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['content'])) {
                    $content = $_POST['content'];
                    $sql = "insert into tts_intro_plus(content, flag) values('$content', 9)";
        
                    execute($sql);
                    header("location:index.php?controller=course");
                }
            }
            break;

        case 'edit':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $introEdit = fetch_one("select * from tts_intro_plus where id = $id");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['content'])) {
                    $content = $_POST['content'];
                    $sql = "update tts_intro_plus set content = '$content' where id=$id and flag = 9";
        
                    execute($sql);
                    header("location:index.php?controller=course");
                }
            }
            break;
        default: break;
    }
    
    $intro_plus = fetch_one("select * from tts_intro_plus where flag = 9 order by id desc");
    $hasIntro_plus = (isset($intro_plus)) ? true : false;
    // load view
    include "view/view_add_edit_course_intro.php";
?>