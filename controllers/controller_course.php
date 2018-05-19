<?php 
    $course_intro = fetch_one("select * from tts_intro_plus where flag = 9 order by id desc limit 0,1");
    $courses = fetch("select * from tts_course where flag = 1 order by id asc");
    $pool_info = fetch("select * from tts_pool_address where flag = 1 order by id asc");

    include "view/view_course.php";
?>