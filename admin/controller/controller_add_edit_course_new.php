<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$dataEdit = fetch_one("select * from tts_course_new where id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_course_new&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$course_name = mysql_escape_string($_POST["course_name"]);
			$course_open = $_POST["course_open"];
			$participants = mysql_escape_string($_POST["participants"]);
			$course_price = mysql_escape_string($_POST["course_price"]);
			$teacher_name = mysql_escape_string($_POST["teacher_name"]);
			$phone = $_POST["phone"];
			$duration = mysql_escape_string($_POST["duration"]);
			$time = mysql_escape_string($_POST["time"]);
			$flag =$_POST["flag"];

			execute("update tts_course_new set
					course_name='$course_name',
					course_open='$course_open',
					participants='$participants',
					course_price='$course_price',
					teacher_name='$teacher_name',
					phone='$phone',
					duration='$duration',
					time='$time',
					flag='$flag'
					where id=$id");

			header("location:index.php?controller=course_new");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_course_new&act=do_add";
			break;
		case 'do_add':
			$course_name = mysql_escape_string($_POST["course_name"]);
			$course_open = $_POST["course_open"];
			$participants = mysql_escape_string($_POST["participants"]);
			$course_price = mysql_escape_string($_POST["course_price"]);
			$teacher_name = mysql_escape_string($_POST["teacher_name"]);
			$phone = $_POST["phone"];
			$duration = mysql_escape_string($_POST["duration"]);
			$time = mysql_escape_string($_POST["time"]);

			execute("insert into 
					tts_course_new(course_name,course_open,participants,course_price,teacher_name,phone,duration,time, flag)
					values('$course_name','$course_open','$participants','$course_price','$teacher_name','$phone','$duration','$time', 1)");
			header("location:index.php?controller=course_new");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_course_new.php";
?>