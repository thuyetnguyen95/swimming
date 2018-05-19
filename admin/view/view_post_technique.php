<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Các kỹ thuật bơi</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
    <div class="col-md-12">
        <div class="">
            <p style="font-size: 24px; color: #068ddc">Các bài viết kỹ thuật bơi</p>
        </div>
        <div class="col-md-12" >
            <div style="margin-bottom: 15px; ">
                <a class="btn btn-primary btn-sm" href="index.php?controller=add_edit_post_technique&act=add"><i class="fa fa-plus">&nbsp;</i>Thêm bài viết mới</a>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr style="background-color: #ddd;">
                    <th style="width: 50px;">STT</th>
                    <th style="width: 135px; ">Loại kỹ thuật bơi</th>
                    <th style="">Tiêu đề bài viết</th>
                    <th style="width: 100px; ">Ngày đăng</th>
                    <th style="width: 90px; ">Trạng thái</th>
                    <th style="width: 80px;">Tác vụ</th>
                </tr>
                <?php
                    $stt = 0;
                    foreach ($posts as $key => $value) {
                        $stt++;
                ?>
                <tr>
                    <td align="center"><?= $stt;?></td>
                    <td>
                        <?php
                            if ($value['type'] == 2) { echo 'Kỹ thuật bơi ếch';}
                            if ($value['type'] == 3) { echo 'Kỹ thuật bơi sải';}
                            if ($value['type'] == 4) { echo 'Kỹ thuật bơi ngửa';}
                            if ($value['type'] == 5) { echo 'Kỹ thuật bơi bướm';}
                        ?>
                    </td>
                    <td><?= $value['title'];?></td>
                    <td><?php echo date('d-m-Y', strtotime($value['create_date']));?></td>
                    <td style="text-align: center">
                        <span class="label <?php echo ($value["flag"] == 1) ? "label-success":"label-warning";?>">
                            <?php echo ($value["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
                        </span>
                    </td>
                    <td style="text-align:center">
                        <p>
                            <a href="index.php?controller=add_edit_post_technique&act=edit&id=<?php echo $value["id"];?>" class="btn btn-info btn-sm">
                                <i class="fa fa-edit"></i> Sửa
                            </a>
                        </p>
                        <p>
                            <a onclick="return window.confirm('Có muốn xóa ?')" href="index.php?controller=posts_technique&act=delete&id=<?php echo $value["id"];?>"  class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Xóa
                            </a>
                        </p>
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
                        <a href="index.php?controller=post&aid=<?= $typeFilter;?>&p=<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
