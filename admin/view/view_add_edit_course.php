<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
		<?php if ($act == 'add') { ?>
			<li class="active"> Thêm một khóa học </li>
		<?php } if ($act == 'edit') { ?>
			<li class="active"> Sửa một khóa học</li>
		<?php } ?>
    </ol>
</div>
<!-- End bage -->
<div class="row">
	<div class="col-md-12" style="padding-bottom: 50px;">
		<?php if ($act == 'add') { ?>
			<p style="font-size: 24px; color: #068ddc">Thêm một lớp học</p>
		<?php } if ($act == 'edit') { ?>
			<p style="font-size: 24px; color: #068ddc">Chỉnh sửa một lớp học</p>
		<?php } ?>
		<div class="panel panel-info">
			<div class="panel-heading">
				Thêm / sửa lớp học
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_control;?>">
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Các loại lớp học</b></div>
						<div class="col-md-6">
							<label class="radio-inline"><input type="radio" name="type" value="1" <?= (!isset($dataEdit) || $dataEdit['type'] == 1) ? 'checked':'' ?>>Học kèm riêng</label>
							<label class="radio-inline"><input type="radio" name="type" value="2" <?= (isset($dataEdit) && $dataEdit['type'] == 2) ? 'checked':'' ?>>Học theo nhóm</label>
							<label class="radio-inline"><input type="radio" name="type" value="3" <?= (isset($dataEdit) && $dataEdit['type'] == 3) ? 'checked':'' ?>>Học theo lớp</label>
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Trạng thái mở lớp</b></div>
						<div class="col-md-3">
							<select name="flag" id="" class="form-control input-sm">
								<option value="1" <?= isset($dataEdit) && ($dataEdit['flag'] == 1) ? 'selected':'';?>>Đang mở lớp</option>
								<option value="0" <?= isset($dataEdit) && ($dataEdit['flag'] != 1) ? 'selected':'';?>>Ngừng mở lớp</option>
							</select>
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<div class="row">
						<div class="col-md-2"><b>Học phí học bơi ếch</b></div>
						<div class="col-md-6">
							<input type="number" name="course_price_1" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['course_price_1']:'';?>" required maxlength="100" placeholder="Nhập học phí bơi ếch ...">
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Học phí bơi sải</b></div>
						<div class="col-md-6">
							<input type="number" name="course_price_2" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['course_price_2']:'';?>" required maxlength="10" placeholder="Nhập học phí bơi sải ...">
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Học phí bơi ngửa</b></div>
						<div class="col-md-6">
							<input type="number" name="course_price_3" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['course_price_3']:'';?>" required maxlength="50" placeholder="Nhập học phí bơi ngửa ...">
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Học phí bơi bướm</b></div>
						<div class="col-md-6">
							<input type="number" name="course_price_4" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['course_price_4']:'';?>" required maxlength="20" placeholder="Nhập học phí bơi bướm ...">
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Thời lượng học</b></div>
						<div class="col-md-6">
							<textarea name="duration" id="" style="resize: vertical;" class="form-control" cols="30" rows="3" maxlength="200" required placeholder="Thời lượng lớp học"><?= isset($dataEdit) ? $dataEdit['duration']:'';?></textarea>
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Mô tả về lớp học</b></div>
						<div class="col-md-12">
							<textarea name="description" id="description" class="form-control" cols="30" rows="3" maxlength="200"><?= isset($dataEdit) ? $dataEdit['description']:'';?></textarea>
							<script type="text/javascript">
                                    CKEDITOR.replace('description', {
                                        filebrowserBrowseUrl: '/All_project/swimming/admin/ckfinder/ckfinder.html',
                                        // filebrowserUploadUrl: '/All_project/swimming/admin/upload/'
                                    });
                                </script>
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top: 15px; ">
						<div class="col-md-10">
							<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Lưu lớp học</button>
							<button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> Nhập lại</button>
						</div>
					</div>
					<!-- end row -->
				</form>
			</div>
		</div>
	</div>
</div>