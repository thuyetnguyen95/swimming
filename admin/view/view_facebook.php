<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Liên kết trang facebook</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <div class="col-md-12">
        <?php
            if (!$hasfacebook) {
        ?>
        <a href="index.php?controller=facebook&act=add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm mới link</a>
        <?php } else { ?>
        <a href="index.php?controller=facebook&act=edit&id=<?= $facebook['id'];?>#form" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Chỉnh sửa</a>
        <a href="index.php?controller=facebook&act=delete&id=<?= $facebook['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa</a>
        <?php } ?>
    </div><span>&nbsp;</span>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr class="active">
                <th style="width: 150px;">Danh mục</th>
                <th style="width: 85%;">Nội dung</th>
            </tr>
            <tr>
                <td><b>Mã script</b></td>
                <td style="overflow: scroll">
                    <xmp style="width: 500px;"><?php echo $facebook['url'];?></xmp>
                </td>
            </tr>
            <tr>
                <td><b>Mã html</b></td>
                <td style="overflow: scroll">
                    <xmp style="width: 500px;"><?php echo $facebook['iframe'];?></xmp>
                </td>
            </tr>
        </table>
    </div>

    <?php
            if (isset($act) && ($act == 'add' || $act == 'edit')) {
    ?>
   <!--  -->
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel panel-heading">Thêm, Sửa đường dẫn trang facebook</div>
            <div class="panel-body">
                <p style="color:blue">Liên hệ : 01682221859 để nhận được sự giúp đỡ</p>
                <form method="post">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3"><label for="">Mã script trang fanpage của bạn</label></div>
                        <div class="col-md-8">
                            <textarea name="url" id="" cols="30" rows="10" class="form-control input-sm" required placeholder="Nhập mã script trang của bạn ở đây"><?php echo isset($arr["url"])?$arr["url"]:"";?></textarea>
                        </div>
                    </div>
                    <!-- end row -->
                    <p></p>
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Mã iframe trang facebook của bạn</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="iframe" id="" cols="30" rows="10" class="form-control input-sm" required placeholder="Nhập mã iframe"><?php echo isset($arr["iframe"])?$arr["iframe"]:"";?></textarea>
                        </div>
                    </div>
                    <br>
                    <!-- end row -->
                    <!-- row -->
                    <div class="row" style="margin-top: 15px; ">
                        <div class=""></div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Lưu đường dẫn</button>
                            <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> Nhập lại</button>
                        </div>
                    </div>
                    <!-- end row -->
                </form>
            </div>
        </div>
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