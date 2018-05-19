<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
		<li class="active">Các lớp học theo nhóm</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
<div class="col-md-12" >
	<div class="">
		<p style="font-size: 24px; color: #068ddc">Danh sách các lớp học tiêu chuẩn</p>
	</div>
	<div style="margin-bottom: 15px; ">
	<a class="btn btn-primary btn-sm" href="index.php?controller=add_edit_course&act=add"><i class="fa fa-plus">&nbsp;</i>Thêm một lớp mới</a>
		<?php
            if (!$hasIntro_plus) {
        ?>
        <a class="btn btn-warning btn-sm" href="index.php?controller=add_edit_course_intro&act=add"><i class="fa fa-plus">&nbsp;</i>Thêm mô tả cho các khóa học tiêu chuẩn</a>
        <?php } else { ?>
        <a href="index.php?controller=add_edit_course_intro&act=edit&id=<?= $intro_plus['id'];?>#form" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Chỉnh sửa phần mô tả</a>
		<a href="index.php?controller=add_edit_course_intro&act=delete&id=<?= $intro_plus['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Xóa mô tả khóa học</a>
        <?php } ?>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading ">Danh sách các lớp học kèm riêng</div>
		<div class="panel-body">
			<table cellpadding="5px;" class="table table-bordered table-hover ">
				<tr class="active">
					<th style="width: 50px; ">STT</th>
					<th style="width: 15%;">Loại lớp học</th>
					<th style="text-align:center;">Các thông tin về lớp học</th>
					<th style="width: 9%; text-align:center;">Trạng thái</th>
					<th style="width: 100px;text-align:center">Tác vụ</th>
				</tr>
				<?php
					$stt=0;
					foreach ($listCourse as $key) {
						$stt++;
				?>
				<tr>
					<td style="text-align:center"><?php echo $stt;?></td>
					<td>
						<span style="font-weight: 600; color: #f32f2fd6"><?php echo $key["name"];?></span>
					</td>
					<td>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Học phí bơi ếch:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo number_format($key['course_price_1']);?>&nbsp;&nbsp;VNĐ</span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Học phí bơi sải:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo number_format($key['course_price_2']);?>&nbsp;&nbsp;VNĐ</span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Học phí bơi ngửa:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo number_format($key['course_price_3']);?>&nbsp;&nbsp;VNĐ</span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Học phí bơi bướm:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo number_format($key['course_price_4']);?>&nbsp;&nbsp;VNĐ</span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Thời lượng:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo $key['duration'];?></span>
						</p>
					</td>
					<td>
						<span class="label <?php echo ($key["flag"] == 1) ? "label-success":"label-warning";?>">
							<?php echo ($key["flag"] == 1) ? "Đang mở lớp":"Lớp ngừng mở";?>
						</span>
					</td>
					<td style="text-align:center">
						<p>
							<a href="index.php?controller=add_edit_course&act=edit&id=<?php echo $key["id"];?>" class="btn btn-info btn-sm" title="sửa">
								<i class="fa fa-edit"></i> Sửa
							</a>
						</p>
						<p>
							<a onclick="return window.confirm('Có muốn xóa ?')" href="index.php?controller=course&act=delete&id=<?php echo $key["id"];?>" title="Xóa" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i> Xóa
							</a>
						</p>
					</td>
				</tr>
				<?php  } ?>
				
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
                    <a href="index.php?controller=course_new&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
		</div>
	</div>
</div>
</div>