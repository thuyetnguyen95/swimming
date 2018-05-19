<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Giới thiệu trung tâm</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <div class="col-md-12">
        <?php
            if (!$hasIntoduction) {
        ?>
        <a href="index.php?controller=introduction&act=add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm mới</a>
        <?php } else { ?>
        <a href="index.php?controller=introduction&act=edit&id=<?= $introduction['id'];?>#form" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Chỉnh sửa</a>
        <a href="index.php?controller=introduction&act=delete&id=<?= $introduction['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa</a>
        <?php } ?>
    </div><span>&nbsp;</span>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr class="active">
                <th style="width: 120px;">Danh mục</th>
                <th>Nội dung</th>
            </tr>
            
            <tr>
                <td><b>Tiêu đề</b></td>
                <td><?php echo $introduction['title'];?></td>
            </tr>
            <tr>
                <td><b>Nội dung</b></td>
                <td>
                    <?php echo $introduction['content'];?>
                </td>
            </tr>
        </table>
    </div>

    <!-- Edit introduction  -->
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
                <label for="title">Tiêu đề giới thiệu</label>
                <input type="text" name="title" class="form-control" id="title" value="<?= isset($introEdit) ? $introEdit['title']:'' ;?>" placeholder="Nhập tiêu đề ở đây ..." required>
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

    <?php } ?>

</div>

<script>
    <?php
        if ($act == 'edit') {
    ?>
    window.onload = function (event) {
        window.location.href = "#testHiragana";
    };
    <?php } ?>
</script>