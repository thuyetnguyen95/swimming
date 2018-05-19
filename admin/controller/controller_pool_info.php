<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tts_link where id = $id and type=2");
            header("location:index.php?controller=pool_info");
            break;

        case 'add':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['url']) && !empty($_POST['title'])) {
                    $url = $_POST['url'];
                    $title = $_POST['title'];
                    $sql = "insert into tts_link(title, url, type) values('$title', '$url', 2)";
        
                    execute($sql);
                    header("location:index.php?controller=pool_info");
                }
            }
            break;

        case 'edit':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $introEdit = fetch_one("select * from tts_link where id = $id and type=2");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['url']) && !empty($_POST['title'])) {
                    $url = $_POST['url'];
                    $title = $_POST['title'];
                    $sql = "update tts_link set title = '$title', url='$url' where id=$id";
        
                    execute($sql);
                    header("location:index.php?controller=pool_info");
                }
            }
            break;
        default: break;
    }
    
    $pool_info = fetch_one("select * from tts_link where type=2 order by id desc limit 0,1");
    $haspool_info = (isset($pool_info)) ? true : false;
    // load view
    include "view/view_pool_info.php";
?>