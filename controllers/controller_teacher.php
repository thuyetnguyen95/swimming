<?php
    $teachers = fetch("select * from tts_teacher_info");

    include_once "view/view_teacher.php";
?>