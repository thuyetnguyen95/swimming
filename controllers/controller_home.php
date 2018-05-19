<?php 
    $pool_intro = fetch_one("select * from tts_introduction where flag = 1 order by id desc");
    $pool_intro_plus = fetch_one("select * from tts_intro_plus where flag = 1 order by id desc");
    $courses = fetch("select * from tts_course where flag = 1 order by id asc");
    $pool_info = fetch("select * from tts_pool_address where flag = 1 order by id asc");

    include "view/view_home.php";
?>