<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Thông tin giảng viên</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <div class="col-md-12">
        <a href="index.php?controller=add_edit_teacher_info&act=add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Thêm mới thông tin giảng viên</a>
    </div><span>&nbsp;</span>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr class="active">
                <th style="width: 200px;">Tên giảng viên</th>
                <th style="width: 80%;">Nội dung giới thiệu</th>
            </tr>
            <?php
                foreach ($teacher_info as $key => $value) {
            ?>
            <tr>
                <td style="font-weight: 600;color: #f32f2fd6;">
                    <p><?php echo $value['name'];?></p>
                    <p><a href="index.php?controller=add_edit_teacher_info&act=edit&id=<?= $value['id'];?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Sửa</a></p>
                    <p><a href="index.php?controller=teacher_info&act=delete&id=<?= $value['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa</a></p>
                </td>
                <td>
                    <?php echo $value['content'];?>
                </td>
            </tr>
            <?php } ?>
        </table>
        <div>
            <ul class="pagination" style="margin: 0px; padding: 0px; ">
                <?php 
                    for($i=1; $i<=$num_page; $i++) {
                        if (!isset($_GET['p'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['p'];
                        }
                ?>
                <li class="<?php echo ($page == $i) ? "active":"";?>">
                    <a href="index.php?controller=teacher_info&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>

</div>
