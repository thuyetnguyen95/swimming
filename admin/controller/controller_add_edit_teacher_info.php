<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'add': 
            $form_control = 'index.php?controller=add_edit_teacher_info&act=do_add';
            break;
        case 'do_add':
            if (!empty($_POST['teach_name']) && !empty($_POST['content'])) {
                $name = $_POST['teach_name'];
                $content = $_POST['content'];
                $sql = "insert into tts_teacher_info(name, content) values('$name', '$content')";

                execute($sql);
                header("location:index.php?controller=teacher_info");
            }
            break;
        case 'edit': 
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $introEdit = fetch_one("select * from tts_teacher_info where id = $id");
            $form_control = 'index.php?controller=add_edit_teacher_info&act=do_edit&id='.$id;
            
            break;
        case 'do_edit':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            if (!empty($_POST['teach_name']) && !empty($_POST['content'])) {
                $name = $_POST['teach_name'];
                $content = $_POST['content'];
                $sql = "update tts_teacher_info set name = '$name', content = '$content' where id=$id";
    
                execute($sql);
                header("location:index.php?controller=teacher_info");
            }
            break;
        default: break;
    }

    // load view
    include "view/view_add_edit_teacher_info.php";
?>