<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Chỉnh sửa slide ảnh</li>
    </ol>
</div>
<!-- End bage -->
<div class="col-md-12">
	<div class="panel panel-info">
		<div class="panel panel-heading">Thêm, Sửa ảnh slide</div>
		<div class="panel-body">
			<p style="color:red">Lưu ý: Nên chọn ảnh slide có tỷ lệ 1000 x 350 pixel để hiển thị được tốt nhất </p>
			<form method="post" action="<?php echo $form_control;?>" enctype="multipart/form-data">
				<!-- row -->
				<div class="row">
					<div class="col-md-2">Tiêu đề ảnh</div>
					<div class="col-md-8">
						<input type="text" name="title" class="form-control input-sm" value="<?php echo isset($arr["title"])?$arr["title"]:"";?>" required maxlength="100" placeholder="Tiêu đề hình ảnh">
					</div>
				</div>
				<br>
				<!-- end row -->
				<div class="row" style="margin-top: 5px; ">
					<div class="col-md-2">Chọn hình ảnh</div>
					<div class="col-md-10">
						<input type="file" name="image_url" <?= ($act == 'add') ? 'required':''?>>
					</div>
				</div>
				<br>
				<!-- end row -->
				<?php 
					if($_GET["controller"]=="add_edit_slide" && $_GET["act"]=="add"){
						include "v_add_slide.php";
					}
					else if($_GET["controller"]=="add_edit_slide" && $_GET["act"]=="edit"){
						include "v_edit_slide.php";
					}
				?>

				<!-- row -->
				<div class="row" style="margin-top: 15px; ">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Thêm hình ảnh</button>
						<button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> Nhập lại</button>
					</div>
				</div>
				<!-- end row -->
			</form>
		</div>
	</div>
</div>