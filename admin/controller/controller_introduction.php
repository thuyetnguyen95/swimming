<?php
    // =========================================
    $act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tts_introduction where id = $id");
            header("location:index.php?controller=introduction");
            break;

        case 'add':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $sql = "insert into tts_introduction(title, content) values('$title', '$content')";
        
                    execute($sql);
                    header("location:index.php?controller=introduction");
                }
            }
            break;

        case 'edit':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $introEdit = fetch_one("select * from tts_introduction where id = $id");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['title']) && !empty($_POST['content'])) {
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $sql = "update tts_introduction set title = '$title', content = '$content' where id=$id";
        
                    execute($sql);
                    header("location:index.php?controller=introduction");
                }
            }
            break;
        default: break;
    }
    
    // ====================phân trang============
    // $record_perpage = 10;
    // $total_record = fetch_one("select count(*) as total from tts_introduction");
    // $num_page = ceil($total_record["total"]/$record_perpage);
    // $page = 1;
    // $page = isset($_GET["p"]) ? $_GET["p"]:0;
    // $page = $page <= 0 ? 0:$page-1;
    // $from = $page * $record_perpage;
    $introduction = fetch_one("select * from tts_introduction order by id desc");
    $hasIntoduction = (isset($introduction)) ? true : false;
    // load view
    include "view/view_introduction.php";
?>