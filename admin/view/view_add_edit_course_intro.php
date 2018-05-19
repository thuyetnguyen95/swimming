<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Mô tả thông tin khóa học</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <?php if ($act == 'edit') { ?>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr class="active">
                    <th style="width: 150px;">Danh mục</th>
                    <th>Nội dung</th>
                </tr>
                <tr>
                    <td><b>Thông tin bổ sung</b></td>
                    <td>
                        <?php echo $intro_plus['content'];?>
                    </td>
                </tr>
            </table>
        </div>
    <?php } ?>
    <div class="col-md-12" style="margin-bottom: 30px;" id="form">
        <div class="row" style="padding-top: 10px;">
            <p class="bg-primary">
                Chỉnh sửa thông tin giới thiệu khóa học
            </p>
        </div>
        <form method="post">
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
