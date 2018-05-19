<style>
    #cke_1_contents {height: 300px !important;}
</style>
<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Thông tin giới thiệu bể bơi</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <div class="col-md-12">
        <?php
            if (!$haspool_info) {
        ?>
        <a href="index.php?controller=pool_info&act=add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm mới</a>
        <?php } else { ?>
        <a href="index.php?controller=pool_info&act=edit&id=<?= $pool_info['id'];?>#form" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Chỉnh sửa</a>
        <a href="index.php?controller=pool_info&act=delete&id=<?= $pool_info['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa</a>
        <?php } ?>
    </div><span>&nbsp;</span>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr class="active">
                <th style="">Danh mục</th>
                <th style="width: 80%;">Nội dung</th>
            </tr>
            <tr>
                <td><b>Giới thiệu ngắn về bể bơi</b></td>
                <td>
                    <?php echo $pool_info['title'];?>
                </td>
            </tr>
            <tr>
                <td><b>Video giới thiệu bể bơi</b></td>
                <td style="<?php echo isset($pool_info['url']) ? 'height: 450px;':''?>">
                    <?php echo $pool_info['url'];?>
                </td>
            </tr>
        </table>
    </div>

    <!-- Edit pool_info  -->
    <?php
        if ($act == 'add' || $act == 'edit') {
    ?>

    <div class="col-md-12" style="margin-bottom: 30px;" id="form">
        <hr>
        <div class="panel panel-primary">
            <div class="panel-heading">Thêm mới / Chỉnh sửa thông tin giới thiệu bể bơi</div>
            <div class="panel-body">
                <form method="post" id="form">
                    <div class="form-group">
                        <label for="url">Đường link video youtube giới thiệu bể bơi</label>
                        <textarea name="url" id="" cols="30" rows="2" class="form-control" id="url" placeholder="Nhập link video ở đây ..." required><?= isset($introEdit) ? $introEdit['url']:'' ;?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Nhập nội dung giới thiệu</label>
                        <textarea name="title" id="title" cols="30" class="form-control"><?= isset($introEdit) ? $introEdit['title']:'' ;?></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('title', {
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

    <?php } ?>

</div>

<script>
    <?php
        if ($act == 'edit' || $act == 'add') {
    ?>
    window.onload = function (event) {
        window.location.href = "#form";
    };
    <?php } ?>
</script>