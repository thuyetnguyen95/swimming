<?php  
	// load session
	session_start();
	// load config
	include "config.php";
	// load model
	include "model/model.php";
	
	$con = isset($_GET["con"]) ? $_GET["con"]:"";
	// if ($con == 'logout') {
	// 	unset($_SESSION["user_name"]);
	// 	unset($_SESSION["user_id"]);
	// 	header('location: index.php?con=login');
    // }
    $slides = fetch("select * from tts_slide where flag = 1 order by id desc");
	$load_con = "controllers/controller_home.php";
	if(file_exists("controllers/controller_".$con.".php")) {
		$load_con = "controllers/controller_".$con.".php";
	}
	
	include "view/view_layout.php";

?>