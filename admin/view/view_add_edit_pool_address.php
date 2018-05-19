<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Thêm | sửa thông tin bể bơi</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
	<div class="col-md-12" style="padding-bottom: 50px;">
		<div class="panel panel-info">
			<div class="panel-heading">Thêm mới / Chỉnh sửa thông tin bể bơi</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_control;?>">
					<?php
						if ($act == 'edit') {
					?>
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Trạng thái hiển thị</b></div>
						<div class="col-md-3">
							<select name="flag" id="" class="form-control input-sm">
								<option value="1" <?= isset($dataEdit) && ($dataEdit['flag'] == 1) ? 'selected':'';?>>Cho phép hiển thị</option>
								<option value="0" <?= isset($dataEdit) && ($dataEdit['flag'] != 1) ? 'selected':'';?>>Tạm ẩn</option>
							</select>
						</div>
					</div>
					<br>
					<!-- end row -->
					<?php } ?>
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Tên bể bơi</b></div>
						<div class="col-md-6">
							<input type="text" name="name" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['name']:'';?>" required maxlength="500" placeholder="Nhập tên bể bơi">
						</div>
					</div>
					<p></p>
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Địa chỉ</b></div>
						<div class="col-md-6">
							<input type="text" name="address" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['address']:'';?>" required maxlength="500" placeholder="Nhập địa chỉ bể bơi">
						</div>
					</div>
					<p></p>
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Giá vé lượt</b></div>
						<div class="col-md-6">
							<input type="number" name="ticket_price" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['ticket_price']:'';?>" required maxlength="10" placeholder="Nhập giá vé">
						</div>
					</div>
					<p></p>
					<!-- row -->
					<div class="row">
						<div class="col-md-2"><b>Giá vé sau khi đăng ký khóa học</b></div>
						<div class="col-md-6">
							<input type="number" name="ticket_price_hasteach" class="form-control input-sm" value="<?= isset($dataEdit) ? $dataEdit['ticket_price_hasteach']:'';?>" required maxlength="10" placeholder="Nhập giá vé khi đăng ký khóa học">
						</div>
					</div>
					<p></p>
					<!-- end row -->
					<!-- row -->
					<div class="row" style="margin-top: 15px; ">
						<div class="col-md-10 col-md-offset-1">
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