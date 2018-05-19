<?php 
	$act = isset($_GET["act"]) ? $_GET["act"]:"";
	switch ($act) {
		case 'edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$dataEdit = fetch_one("select * from tts_pool_address where id=$id");
			$form_control = "index.php?controller=add_edit_pool_address&act=do_edit&id=$id";
			break;
		case 'do_edit':
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]:0;
			$name = mysql_escape_string($_POST["name"]);
			$address = mysql_escape_string($_POST["address"]);
			$ticket_price = $_POST["ticket_price"];
			$ticket_price_hasteach = $_POST["ticket_price_hasteach"];
			$flag =$_POST["flag"];

			execute("update tts_pool_address set
				name='$name',
				address='$address',
				ticket_price='$ticket_price',
				ticket_price_hasteach='$ticket_price_hasteach',
				flag='$flag'
				where id=$id");

			header("location:index.php?controller=pool_address");
			break;
		case 'add':
			$form_control = "index.php?controller=add_edit_pool_address&act=do_add";
			break;
		case 'do_add':
			$name = mysql_escape_string($_POST["name"]);
			$address = mysql_escape_string($_POST["address"]);
			$ticket_price = $_POST["ticket_price"];
			$ticket_price_hasteach = $_POST["ticket_price_hasteach"];
			$sql = "insert into tts_pool_address(name,address,ticket_price,ticket_price_hasteach,flag) values('$name','$address','$ticket_price','$ticket_price_hasteach',1)";
			execute($sql);
			header("location:index.php?controller=pool_address");
			break;
	}
	// load view
	include "view/view_add_edit_pool_address.php";
?>