<?php include_once "controllers/lib.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php ob_start(); include "view/include/view_header.php";?>
</head>

<div class="wrapper">
        <?php include_once "view/include/view_menu.php";?>
        <!-- main -->
        <div class="main" style="margin-top:50px; padding: 10px 10%;">
            <!-- slide -->
            <?php include_once "view/include/view_slide.php";?>
            <!-- endslide -->
            <div class="row content-main">
                <div class="col-md-8 custom-col" style="padding-right: 10px;">
                    <?php
                        if(isset($load_con)) {
                            include $load_con;
                        }
                    ?>
                </div>
                <div class="col-md-4 custom-col">
                    <?php include_once "controllers/controller_sidebar.php";?>
                </div>
            </div>
    </div>
</div>

<?php ob_start(); include "view/include/view_footer.php";?>

</body>
</html>
