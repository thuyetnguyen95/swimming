<?php
    $id = isset($_GET['id']) && $_GET['id'] != '' ? $_GET['id']:1;
    // var_dump($id);die();
    $postDetail = fetch_one("select * from tts_post where id = $id");

    include_once "view/view_detail.php";
?>