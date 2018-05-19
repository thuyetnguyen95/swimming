<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">TRANG QUẢN TRỊ WEBSITE</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            Xin chào: <i class="fa fa-user fa-fw"></i><?= $_SESSION['tts_fullname'];?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
            <li><a href="index.php?controller=change_pass"><i class="fa fa-gear fa-fw"></i> Đổi mật khẩu</a>
                </li>
                <li><a href="index.php?controller=change_info"><i class="fa fa-user fa-fw"></i> Chỉnh sửa thông tin</a>
                </li>
                <li class="divider"></li>
                <li><a href="index.php?controller=logout"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Màn hình chính</a>
                </li>
                <li>
                    <a href="index.php?controller=posts" class="<?php echo ($_GET['controller'] == 'add_edit_post') ? 'active':'';?>"><i class="fa fa-dashboard fa-fw"></i> Bài viết</a>
                </li>
                <li>
                    <a href="index.php?controller=introduction"><i class="fa fa-dashboard fa-fw"></i> Giới thiệu về trung tâm</a>
                </li>
                <li>
                    <a href="index.php?controller=intro_plus"><i class="fa fa-dashboard fa-fw"></i> Thông tin bổ sung</a>
                </li>
                <li>
                    <a href="index.php?controller=teacher_info"><i class="fa fa-dashboard fa-fw"></i> Thông tin giảng viên</a>
                </li>
                <li>
                    <a href="index.php?controller=slide" class="<?php echo ($_GET['controller'] == 'add_edit_slide') ? 'active':'';?>"><i class="fa fa-dashboard fa-fw"></i> Chỉnh sửa slide ảnh</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Liên kết khác<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="index.php?controller=facebook">Trang facebook</a>
                        </li>
                        <li>
                            <a href="index.php?controller=pool_info">Video bể bơi</a>
                        </li>
                        <li>
                            <a href="index.php?controller=contact_info">Thông tin liên hệ</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="index.php?controller=posts_technique" class="<?php echo ($_GET['controller'] == 'add_edit_post_technique') ? 'active':'';?>"><i class="fa fa-sitemap fa-fw"></i> Kiến thức bơi lội</a>
                </li>
                <li>
                    <a href="index.php?controller=course_new" class="<?php echo ($_GET['controller'] == 'add_edit_course_new') ? 'active':'';?>"><i class="fa fa-sitemap fa-fw">&nbsp;</i>Các lớp sắp mở</a>
                </li>
                <li>
                    <a href="index.php?controller=course" class="<?php echo ($_GET['controller'] == 'add_edit_course') ? 'active':'';?>"><i class="fa fa-sitemap fa-fw">&nbsp;</i>Các lớp học tiêu chuẩn</a>
                </li>
                <li>
                    <a href="index.php?controller=pool_address" class="<?php echo ($_GET['controller'] == 'add_edit_pool_address') ? 'active':'';?>"><i class="fa fa-sitemap fa-fw">&nbsp;</i>Địa điểm bể bơi và giá vé</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>