<?php
	// =========================================
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
	switch ($act) {
		case 'delete':
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			execute("delete from tts_course where id = $id");
			header("location:index.php?controller=course");
			break;
	}
	 // số bản ghi trên 1 trang
	 $record_perpage = 10;
	 // tổng số bản ghi
	 $total_record = fetch_one("select count(*) as total from tts_course");
	 // lấy tổng số trang
	 $num_page = ceil($total_record["total"]/$record_perpage);
	 $page = 1;
	 // lấy trang hiện tại
	 $page = isset($_GET["p"]) ? $_GET["p"]:0;
	 $page = $page <= 0 ? 0:$page-1;
	 // các bản ghi trên trang đó
	 $from = $page * $record_perpage;
	 // thực hiện truy vấn khi có các thông tin ở trên
	$listCourse = fetch("select * from tts_course order by id asc limit $from,$record_perpage");
	$intro_plus = fetch_one("select * from tts_intro_plus where flag = 9 order by id desc");
    $hasIntro_plus = (isset($intro_plus)) ? true : false;
	// =========================================
	// load view
	include "view/view_course.php";
?>