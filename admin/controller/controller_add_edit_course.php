<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			// lấy bản ghi của id vừa truyền vào
			$dataEdit = fetch_one("select * from tts_course where id=$id");
			// trỏ đến action của form
			$form_control = "index.php?controller=add_edit_course&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$type = $_POST['type'];
			$description = $_POST['description'];
			$course_pirce_1 = $_POST["course_price_1"];
			$course_pirce_2 = $_POST["course_price_2"];
			$course_pirce_3 = $_POST["course_price_3"];
			$course_pirce_4 = $_POST["course_price_4"];
			$duration = mysql_escape_string($_POST["duration"]);
			$flag = $_POST["flag"];
			$name = 'Học bơi';
			if ($type == 1) {
				$name = 'Học kèm riêng';
			}
			if ($type == 2) {
				$name = 'Học theo nhóm';
			}
			if ($type == 3) {
				$name = 'Học theo lớp';
			}

			execute("update tts_course set
				description='$description',
				course_price_1='$course_pirce_1',
				course_price_2='$course_pirce_2',
				course_price_3='$course_pirce_3',
				course_price_4='$course_pirce_4',
				duration='$duration',
				type='$type',
				flag='$flag',
				name='$name' 
				where id=$id");

			header("location:index.php?controller=course");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_course&act=do_add";
			break;
		case 'do_add':
			$type = $_POST['type'];
			$description =$_POST["description"];
			$course_pirce_1 =$_POST["course_price_1"];
			$course_pirce_2 = $_POST["course_price_2"];
			$course_pirce_3 = $_POST["course_price_3"];
			$course_pirce_4 = $_POST["course_price_4"];
			$duration = mysql_escape_string($_POST["duration"]);
			$flag = mysql_escape_string($_POST["flag"]);
			$name = 'Học bơi';
			if ($type == 1) {
				$name = 'Học kèm riêng';
			}
			if ($type == 2) {
				$name = 'Học theo nhóm';
			}
			if ($type == 3) {
				$name = 'Học theo lớp';
			}


			execute("insert into tts_course(type, name,description,course_price_1,course_price_2,course_price_3,course_price_4,duration,flag) values('$type','$name','$description','$course_pirce_1','$course_pirce_2','$course_pirce_3','$course_pirce_4','$duration','$flag')");

			header("location:index.php?controller=course");
			break;
		default:
			# code...
			break;
	}
	// load view
	include "view/view_add_edit_course.php";
?>