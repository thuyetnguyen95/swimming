<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Các lớp học sắp mở</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
	<div class="col-md-12" style="padding-bottom: 50px;">
		<div class="panel panel-info">
			<div class="panel-heading">Thêm mới / chỉnh sửa lớp học sắp mở</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_control;?>">
					<?php
						if ($act == 'edit') {
					?>
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Trạng thái mở lớp</b></div>
						<div class="col-md-3">
							<select name="flag" id="" class="form-control">
								<option value="1" <?= isset($dataEdit) && ($dataEdit['flag'] == 1) ? 'selected':'';?>>Đang mở lớp</option>
								<option value="0" <?= isset($dataEdit) && ($dataEdit['flag'] != 1) ? 'selected':'';?>>Ngừng mở lớp</option>
							</select>
						</div>
					</div>
					<br>
					<!-- end row -->
					<?php } ?>
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Tên lớp học</b></div>
						<div class="col-md-6">
							<input type="text" name="course_name" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['course_name']:'';?>" required maxlength="100" placeholder="Tên lớp học">
						</div>
					</div>
					<br>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Thời gian mở lớp</b></div>
						<div class="col-md-6">
							<input type="date" name="course_open" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['course_open']:'';?>" required placeholder="Tên lớp học">
						</div>
					</div>
					<br>
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Đối tượng tham gia</b></div>
						<div class="col-md-6">
							<input type="text" name="participants" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['participants']:'';?>" required maxlength="100" placeholder="Đối tượng tham gia lớp học">
						</div>
					</div>
					<br>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Học phí</b></div>
						<div class="col-md-6">
							<input type="number" name="course_price" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['course_price']:'';?>" required maxlength="10" placeholder="Học phí lớp học">
						</div>
					</div>
					<br>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Tên giảng viên</b></div>
						<div class="col-md-6">
							<input type="text" name="teacher_name" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['teacher_name']:'';?>" required maxlength="50" placeholder="Tên giảng viên lớp học">
						</div>
					</div>
					<br>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Số điện thoại</b></div>
						<div class="col-md-6">
							<input type="number" name="phone" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['phone']:'';?>" required maxlength="20" placeholder="Số điện thoại giảng viên">
						</div>
					</div>
					<br>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Thời lượng học</b></div>
						<div class="col-md-6">
							<textarea name="duration" id="" class="form-control" cols="30" rows="3" maxlength="200" required placeholder="Thời lượng lớp học"><?= isset($dataEdit) ? $dataEdit['duration']:'';?></textarea>
						</div>
					</div>
					<br>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Số buổi học</b></div>
						<div class="col-md-6">
							<input type="text" name="time" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['time']:'';?>" required maxlength="50" placeholder="Số buổi học">
						</div>
					</div>
					<br>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top: 15px; ">
						<div class="col-md-10">
							<button type="submit" class="btn btn-primary btn-sm1"><i class="fa fa-save"></i> Lưu lớp học</button>
							<button type="reset" class="btn btn-warning btn-sm1"><i class="fa fa-refresh"></i> Nhập lại</button>
						</div>
					</div>
					<!-- end row -->
				</form>
			</div>
		</div>
	</div>
</div>