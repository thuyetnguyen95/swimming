<?php
    $contactInfo = fetch_one("select * from tts_link where type=3 order by id desc limit 0,1");

    include_once "view/view_contact.php";
?>