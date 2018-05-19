<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Thông tin bổ sung</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <div class="col-md-12">
        <?php
            if (!$hasIntro_plus) {
        ?>
        <a href="index.php?controller=intro_plus&act=add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm mới</a>
        <?php } else { ?>
        <a href="index.php?controller=intro_plus&act=edit&id=<?= $intro_plus['id'];?>#form" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Chỉnh sửa</a>
        <a href="index.php?controller=intro_plus&act=delete&id=<?= $intro_plus['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa</a>
        <?php } ?>
    </div><span>&nbsp;</span>
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

    <!-- Edit intro_plus  -->
    <?php
        if ($act == 'add' || $act == 'edit') {
    ?>

    <div class="col-md-12" style="margin-bottom: 30px;" id="form">
        <hr>
        <div class="row" style="padding-top: 10px;">
            <p class="bg-primary">
                Chỉnh sửa thông tin giới thiệu trung tâm
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

    <?php } ?>

</div>

<script>
    <?php
        if ($act == 'edit') {
    ?>
    window.onload = function (event) {
        window.location.href = "#form";
    };
    <?php } ?>
</script>