<?php 
    $courses_new = fetch("select * from tts_course_new where flag = 1 order by course_open asc limit 0,3");
    $facebook = fetch_one("select * from tts_link where type= 1 and flag = 1 order by id desc");
    $youtube = fetch_one("select * from tts_link where type= 2 and flag = 1 order by id desc");
    $posts = fetch("select title,id from tts_post where type= 1 and flag = 1 order by id desc limit 0,6");
    
    include "view/include/view_sidebar.php";
?>