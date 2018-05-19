<?php 
    $record_perpage = 10;
    $total_record = fetch_one("select count(*) as total from tts_course_new order by id desc limit 0,50");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;

    // $posts = fetch("select * from tts_post where type = 1 order by id desc ");
    $courses_new = fetch("select * from tts_course_new order by id desc limit $from,$record_perpage");

    include "view/view_course_new.php";
?>