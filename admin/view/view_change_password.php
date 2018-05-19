<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Thay đổi mật khẩu</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
<div class="col-md-12">
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">Thay đổi mật khẩu</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form method="post" action="index.php?controller=change_pass" enctype="multipart/form-data">
                        <?php echo !empty($msg) ? $msg:'';?>
                        <div class="form-group">
                            <label for="mail">Mật khẩu hiện tại</label>
                            <input type="password" name="oldPass" class="form-control input-sm" id="oldPass" required placeholder="Nhập mật khẩu cũ">
                        </div>
                        <div class="form-group">
                            <label for="mail">Mật khẩu mới</label>
                            <input type="password" name="newPass" class="form-control input-sm" id="newPass" required placeholder="Nhập mật khẩu mới">
                        </div>
                        <div class="form-group">
                            <label for="mail">Nhập lại mật khẩu mới</label>
                            <input type="password" name="rePass" class="form-control input-sm" id="rePass" required placeholder="Nhập lại mật khảu mới">
                        </div>
                        <!-- row -->
                        <div class="row" style="margin-top: 15px; ">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary btn-sm">
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