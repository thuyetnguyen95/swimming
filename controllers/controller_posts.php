<?php
    // =========================================
    $type = isset($_GET["type"]) ? $_GET["type"]: "";

    if ($type == 1) {
        $record_perpage = 15;
        $total_record = fetch_one("select count(*) as total from tts_post where type = 1");
        $num_page = ceil($total_record["total"]/$record_perpage);
        $page = 1;
        $page = isset($_GET["p"]) ? $_GET["p"]:0;
        $page = $page <= 0 ? 0:$page-1;
        $from = $page * $record_perpage;

        $posts = fetch("select * from tts_post where type = 1 order by id desc limit $from,$record_perpage");
    } else {
        $posts = fetch_one("select * from tts_post where type = $type order by id desc limit 0,1");
    }

    // load view
    include "view/view_posts.php";
?>