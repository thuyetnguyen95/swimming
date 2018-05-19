<?php
    $act = isset($_GET['act']) ? $_GET['act']:'';
    switch ($act) {
        case 'add': 
            $form_control = 'index.php?controller=add_edit_post&act=do_add';
            break;
        case 'do_add':
            $flag = $_POST['flag'];
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $content = $_POST['content'];
            $adminId = $_SESSION['id'];
            if(isset($_FILES["image_url"])&& $_FILES["image_url"]["name"] != "" ){
				$img_name = $_FILES["image_url"]["name"];
				$img_size = $_FILES["image_url"]["size"];
				$img_tmp_name = $_FILES["image_url"]["tmp_name"];
				$image_url = "uploads/posts/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$image_url);
				// update CSDL
				execute("insert into tts_post(image) values('$image_url') where id = $id");
			}
            $sql = "insert into tts_post(type, title,description,content,admin_id,create_date,flag)
            values('1','$title','$desc','$content','$adminId', now(), '$flag')";
            execute($sql);
            header("location:index.php?controller=posts");
            break;
        case 'edit':
            $id = isset($_GET['id']) ? $_GET['id']:0;
            $adminId = $_SESSION['id'];
            $postEdit = fetch_one("select * from tts_post where id = $id");
            $form_control = 'index.php?controller=add_edit_post&act=do_edit&id='.$id;
            break;
        case 'do_edit':
            $id = isset($_GET['id']) ? $_GET['id']:0;
            $adminId = $_SESSION['id'];
            $flag = $_POST['flag'];
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $content = $_POST['content'];
            $adminId = $_SESSION['id'];
            if(isset($_FILES["image_url"])&& $_FILES["image_url"]["name"] != "" ){
				$img_name = $_FILES["image_url"]["name"];
				$img_size = $_FILES["image_url"]["size"];
				$img_tmp_name = $_FILES["image_url"]["tmp_name"];
				$image_url = "uploads/posts/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$image_url);
				// update CSDL
				execute("update tts_post set image='$image_url' where id = $id");
			}
            $sql = "update tts_post set 
                title = '$title',
                description = '$desc',
                content = '$content',
                admin_id = '$adminId',
                create_date = now(),
                flag = '$flag' 
                where id = $id";
            execute($sql);
            header("location:index.php?controller=posts");
            break;
            break;
    }
	
    include "view/view_add_edit_post.php";
?>