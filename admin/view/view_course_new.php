<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
		<li class="active">Thêm lớp học sắp mở</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
<div class="col-md-12" >
	<div class="">
		<p style="font-size: 24px; color: #068ddc">Danh sách các lớp học sắp mở</p>
	</div>
	<div style="margin-bottom: 15px; ">
		<a class="btn btn-primary btn-sm" href="index.php?controller=add_edit_course_new&act=add"><i class="fa fa-plus">&nbsp;</i>Thêm một lớp mới</a>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading ">Danh sách các lớp học sắp mở</div>
		<div class="panel-body">
			<table cellpadding="5px;" class="table table-bordered table-hover ">
				<tr>
					<th style="width: 50px; ">STT</th>
					<th style="width: 15%;">Tên lớp</th>
					<th style="text-align:center;">Các thông tin về lớp học</th>
					<th style="width: 9%; text-align:center;">Trạng thái</th>
					<th style="width: 100px;text-align:center">Tác vụ</th>
				</tr>
				<?php
					$stt=0;
					foreach ($listCourse_new as $key) {
						$stt++;
				?>
				<tr>
					<td style="text-align:center"><?php echo $stt;?></td>
					<td><?php echo $key["course_name"];?></td>
					<td>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Thời gian mở lớp:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo date('d-m-Y',strtotime($key['course_open']));?></span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Đối tượng tham gia:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo $key['participants'];?></span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Học phí:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo number_format($key['course_price']);?>&nbsp;&nbsp;VNĐ</span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Tên giảng viên:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo $key['teacher_name'];?></span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Số điện thoại:&nbsp;&nbsp;&nbsp;</span>
							<span>0<?php echo $key['phone'];?></span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Thời lượng:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo $key['duration'];?></span>
						</p>
						<p style="margin-bottom:3">
							<span style="font-weight: 600">Số buổi:&nbsp;&nbsp;&nbsp;</span>
							<span><?php echo $key['time'];?></span>
						</p>
					</td>
					<td>
						<span class="label <?php echo ($key["flag"] == 1) ? "label-success":"label-warning";?>">
							<?php echo ($key["flag"] == 1) ? "Đang mở lớp":"Lớp ngừng mở";?>
						</span>
					</td>
					<td style="text-align:center">
						<p>
							<a href="index.php?controller=add_edit_course_new&act=edit&id=<?php echo $key["id"];?>" class="btn btn-info btn-sm">
								<i class="fa fa-edit"></i> Sửa
							</a>
						</p>
						<p>
							<a onclick="return window.confirm('Có muốn xóa ?')" href="index.php?controller=course_new&act=delete&id=<?php echo $key["id"];?>" title="Xóa hình ảnh" class="btn btn-danger btn-sm">
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