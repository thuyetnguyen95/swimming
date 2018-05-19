<?php 
    $name = isset($_SESSION["username"]) ? $_SESSION["username"]:"";
    
    include "view/view_home.php";
?>