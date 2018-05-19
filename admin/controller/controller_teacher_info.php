<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tts_teacher_info where id = $id");
            header("location:index.php?controller=teacher_info");
            break;
        default: break;
    }
     // số bản ghi trên 1 trang
	 $record_perpage = 10;
	 // tổng số bản ghi
	 $total_record = fetch_one("select count(*) as total from tts_slide");
	 // lấy tổng số trang
	 $num_page = ceil($total_record["total"]/$record_perpage);
	 $page = 1;
	 // lấy trang hiện tại
	 $page = isset($_GET["p"]) ? $_GET["p"]:0;
	 $page = $page <= 0 ? 0:$page-1;
	 // các bản ghi trên trang đó
	 $from = $page * $record_perpage;
	 // thực hiện truy vấn khi có các thông tin ở trên
    $teacher_info = fetch("select * from tts_teacher_info order by id asc limit $from,$record_perpage");
    // load view
    include "view/view_teacher_info.php";
?>