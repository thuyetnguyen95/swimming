<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$arr = fetch_one("select * from tts_slide where id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_slide&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$title = mysql_escape_string($_POST["title"]);
			$flag =$_POST["flag"];
			execute("update tts_slide set title='$title',flag=$flag where id=$id");
			//---------------------------
			// upload ảnh
			if(isset($_FILES["image_url"])&& $_FILES["image_url"]["name"] != "" ){
				$img_name = $_FILES["image_url"]["name"];
				$img_size = $_FILES["image_url"]["size"];
				$img_tmp_name = $_FILES["image_url"]["tmp_name"];
				$image_url = "uploads/slides/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$image_url);
				// update CSDL
				execute("update tts_slide set image_url='$image_url' where id = $id");
			}
			header("location:index.php?controller=slide");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_slide&act=do_add";
			break;
		case 'do_add':
			// $id = isset($_GET["id"]) ? $_GET["id"]:0;
			$title = mysql_escape_string($_POST["title"]);
			if($_POST["flag"]==1)
				$flag = 1;
			else if($_POST["flag"]==0)
				$flag = 0;
			//---------------------------
			// upload ảnh
			if(isset($_FILES["image_url"])&& $_FILES["image_url"]["name"] != "" ){
				$img_name = $_FILES["image_url"]["name"];
				$img_size = $_FILES["image_url"]["size"];
				$img_tmp_name = $_FILES["image_url"]["tmp_name"];
				$image_url = "uploads/slides/".time().$img_name;
				// thực hiện di chuyển file vừa upload và thư mục chỉ định trên website
				move_uploaded_file($img_tmp_name,"../".$image_url);
	}
			execute("insert into tts_slide(title,image_url,flag) values ('$title','$image_url','$flag')");
			header("location:index.php?controller=slide");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_slide.php";
?>