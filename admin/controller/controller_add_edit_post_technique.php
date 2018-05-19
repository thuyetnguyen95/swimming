<?php
    $act = isset($_GET['act']) ? $_GET['act']:'';
    switch ($act) {
        case 'add': 
            $form_control = 'index.php?controller=add_edit_post_technique&act=do_add';
            break;
        case 'do_add':
            $type = $_POST['type'];
            $flag = $_POST['flag'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $adminId = $_SESSION['id'];
            $sql = "insert into tts_post(type, title,content,admin_id,create_date,flag)
            values('$type', '$title','$content','$adminId', now(), '$flag')";
            execute($sql);
            header("location:index.php?controller=posts_technique");
            break;
        case 'edit':
            $id = isset($_GET['id']) ? $_GET['id']:0;
            $adminId = $_SESSION['id'];
            $postEdit = fetch_one("select * from tts_post where id = $id");
            $form_control = 'index.php?controller=add_edit_post_technique&act=do_edit&id='.$id;
            break;
        case 'do_edit':
            $id = isset($_GET['id']) ? $_GET['id']:0;
            $type = $_POST['type'];
            $adminId = $_SESSION['id'];
            $flag = $_POST['flag'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $adminId = $_SESSION['id'];
            $sql = "update tts_post set 
                type = '$type',
                title = '$title',
                content = '$content',
                admin_id = '$adminId',
                create_date = now(),
                flag = '$flag' 
                where id = $id";
            execute($sql);
            header("location:index.php?controller=posts_technique");
            break;
    }
	
    include "view/view_add_edit_technique.php";
?>