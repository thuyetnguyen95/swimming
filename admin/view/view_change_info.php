<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Thay đổi thông tin</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <div class="panel panel-info">
        <div class="panel-heading">
            Chỉnh sửa thông tin của bạn 
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8"><br>
                        <?php
                            echo !empty($msg) ? $msg:'';
                        ?>
                        <form method="post" action="index.php?controller=change_info" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="uname">Tên đăng nhập</label>
                                <input type="text" name="username" class="form-control input-sm" id="uname" value="<?php echo isset($arr["tts_username"])?$arr["tts_username"]:"";?>" required>
                                <span class="text-muted" style="color:#ef4343">(Bạn sẽ phải đăng nhập lại nếu đổi tên đăng nhập)</span>
                            </div>
                            <div class="form-group">
                                <label for="fname">Tên hiển thị</label>
                                <input type="text" name="fullname" class="form-control input-sm" id="fname" value="<?php echo isset($arr["tts_fullname"])?$arr["tts_fullname"]:"";?>" required>
                            </div>
                            <div class="form-group">
                                <span for="pass" style="color:#ef4343">Nhập mật khẩu để cho phép thay đổi</span>
                                <input type="password" name="password" class="form-control input-sm" id="pass" required>
                            </div>
                            <!-- row -->
                            <div class="row" style="margin-top: 15px; ">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-primary btn-sm" name="change">
                                        <i class="fa fa-save"></i> Lưu
                                    </button>
                                    <button type="reset" class="btn btn-warning btn-sm">
                                        <span class="glyphicon glyphicon-refresh" style="word-spacing: -8px;"></span> Nhập lại
                                    </button>
                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>