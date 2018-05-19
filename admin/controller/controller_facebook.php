<?php
	// =========================================
	$act = isset($_GET["act"]) ? $_GET["act"]: "";
    switch ($act) {
        case 'delete':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            execute("delete from tts_link where id = $id");
            header("location:index.php?controller=facebook");
            break;

        case 'add':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['iframe']) && !empty($_POST['url'])) {
					$url = $_POST['url'];
					$iframe = $_POST['iframe'];
                    $sql = "insert into tts_link(url,iframe, type) values('$url', '$iframe', 1)";
        
                    execute($sql);
                    header("location:index.php?controller=facebook");
                }
            }
            break;

        case 'edit':
            $id = isset($_GET["id"]) ? $_GET["id"]:0;
            $arr = fetch_one("select * from tts_link where id = $id and type = 1");

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['iframe']) && !empty($_POST['url'])) {
					$url = mysql_escape_string($_POST['url']);
                    $iframe = mysql_escape_string($_POST['iframe']);
                    // var_dump($url, $iframe);die();
                    $sql = "update tts_link set url = '$url', iframe='$iframe' where id=$id and type=1";
        
                    execute($sql);
                    header("location:index.php?controller=facebook");
                }
            }
            break;
        default: break;
    }

	$facebook = fetch_one("select * from tts_link where type=1 order by id desc limit 0,1");
	$hasfacebook = (isset($facebook)) ? true : false;
	// =========================================
	// load view
	include "view/view_facebook.php";
?>