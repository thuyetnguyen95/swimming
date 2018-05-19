<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Thêm mới | Chỉnh sửa bài viết</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <div class="col-md-12">
        <?php if ($act == 'add') { ?>
            <p style="font-size: 24px; color: #068ddc">Thêm mới một bài viết</p>
        <?php } if ($act == 'edit') { ?>
            <p style="font-size: 24px; color: #068ddc">Chỉnh sửa một vài viết</p>
        <?php } ?>
        <div class="panel panel-info">
            <div class="panel-heading">Thêm mới / chỉnh sửa bài viết</div>
            <div class="panel-body">
                <div class="row" style="margin-bottom: 80px;">
                    <form method="post" class="form-horizontal" action="<?php echo $form_control;?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label" style="">Trạng thái</label>
                            <div class="col-sm-2">
                                <select name="flag" id="" class="form-control input-sm">
                                    <option <?php echo (isset($postEdit) && $postEdit['flag'] == 1) ? 'selected':'';?> value="1">Hiển thị</option>
                                    <option <?php echo (isset($postEdit) && $postEdit['flag'] != 1) ? 'selected':'';?> value="0">Tạm ẩn</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Tiêu đề</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control input-sm" maxlength="150" value="<?php echo isset($postEdit) ? $postEdit['title']:'';?>" placeholder="Nhập tiêu đề">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="col-sm-2 control-label">Tóm tắt bài viết</label>
                            <div class="col-sm-10">
                                <textarea name="desc" id="desc" class="form-control" cols="30" rows="4" maxlength="230"><?php echo isset($postEdit) ? $postEdit['description']:'';?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_url" class="col-sm-2 control-label">Hình ảnh bài viết</label>
                            <div class="col-sm-10">
                                <input type="file" name="image_url" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-label">Nội dung chính</label>
                            <div class="col-md-10">
                                <textarea name="content" id="content"><?php echo isset($postEdit) ? $postEdit['content']:'';?></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace('content', {
                                        filebrowserBrowseUrl: '/All_project/swimming/admin/ckfinder/ckfinder.html',
                                        // filebrowserUploadUrl: '/All_project/swimming/admin/upload/'
                                    });
                                </script>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="form-group" style="margin-top:25px;">
                            <label for="answer" class="col-sm-2"></label>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-save"></i>
                                <span style="margin-left:1px;">Lưu</span>
                            </button>
                            <button type="reset" class="btn btn-warning btn-sm" onclick="resetBtn()">
                                <i class="glyphicon glyphicon-refresh"></i>
                                <span style="margin-left:1px;">Nhập lại</span>
                            </button>
                        </div>
                        <!-- end row -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function resetBtn() {
        window.location.reload();
    }
</script>