<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "include/header.php";?>
</head>

<body>

    <div id="wrapper">

        <!-- include side bar -->
        <?php ob_start(); include_once "include/menu.php";?>
        <!-- end side bar -->

        <div id="page-wrapper">
            <?php
                if(isset($load_controller)) {
                    include $load_controller;
                }
            ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
    <?php include_once "include/footer.php";?>
</body>

</html>
