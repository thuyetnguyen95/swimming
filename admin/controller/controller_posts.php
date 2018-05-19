<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tts_post where id = $id");
            header("location:index.php?controller=posts");
            break;
    }
    $adminData = fetch("select * from tts_admin");
    $record_perpage = 10;
    $total_record = fetch_one("select count(*) as total from tts_post where type = 1");
    $num_page = ceil($total_record["total"]/$record_perpage);
    $page = 1;
    $page = isset($_GET["p"]) ? $_GET["p"]:0;
    $page = $page <= 0 ? 0:$page-1;
    $from = $page * $record_perpage;
    $posts = fetch("select * from tts_post where type = 1 order by id desc limit $from,$record_perpage");
    // load view
    include "view/view_posts.php";
?>