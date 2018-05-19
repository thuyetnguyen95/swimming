<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Thêm mới | Chỉnh sủa thông tin giảng viên</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <!-- Edit teacher_info  -->
    <div class="col-md-12" style="margin-bottom: 30px;" id="form">
        <div class="panel panel-info">
            <div class="panel-heading">Thêm mới / chỉnh sửa thông tin giảng viên</div>
            <div class="panel-body">
                <form method="post" action="<?= $form_control;?>">
                    <div class="form-group">
                        <label>Tên giảng viên</label>
                        <input type="text" class="form-control input-sm" name="teach_name" value="<?= isset($introEdit) ? $introEdit['name']:'' ;?>" maxlength="30" required placeholder="Nhập tên giảng viên ở đây ...">
                    </div>
                    <div class="form-group">
                        <label for="content">Nhập nội dung giới thiệu</label>
                        <textarea name="content" id="content" cols="30" rows="500" class="form-control"><?= isset($introEdit) ? $introEdit['content']:'' ;?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('content', {
                                filebrowserBrowseUrl: '/All_project/swimming/admin/ckfinder/ckfinder.html',
                                // filebrowserUploadUrl: '/All_project/swimming/admin/upload/'
                            });
                        </script>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
                    <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Nhập lại</button>
                </form>
            </div>
        </div>
    </div>

</div>
