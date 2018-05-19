<div class="row" style="padding-top: 10px;">
    <ol class="breadcrumb">
        <li><a href="index.php">Trang chủ</a></li>
		<li class="active">Danh sách bể bơi</li>
    </ol>
</div>
<!-- End bage -->
<div class="row">
<div class="col-md-12" >
	<!-- <div class="">
		<p style="font-size: 24px; color: #068ddc">Danh sách bể bơi</p>
	</div> -->
	<div style="margin-bottom: 15px; ">
		<a class="btn btn-primary btn-sm" href="index.php?controller=add_edit_pool_address&act=add"><i class="fa fa-plus">&nbsp;</i>Thêm một bể bơi mới</a>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading ">Danh sách bể bơi</div>
		<div class="panel-body">
			<table cellpadding="5px;" class="table table-bordered table-hover ">
				<tr>
					<th style="width: 50px; ">STT</th>
					<th style="width: 15%;">Tên bể bơi</th>
					<th style="text-align:center;">Địa chỉ</th>
					<th style="width: 130px;text-align:center">Giá vé lượt</th>
					<th style="width: 130px;text-align:center">Giá vé khi đăng ký khóa học</th>
					<th style="width: 9%; text-align:center;">Trạng thái</th>
					<th style="width: 100px;text-align:center">Tác vụ</th>
				</tr>
				<?php
					$stt=0;
					foreach ($pool_address as $key) {
						$stt++;
				?>
				<tr>
					<td style="text-align:center"><?php echo $stt;?></td>
					<td><?php echo $key["name"];?></td>
					<td><?php echo $key["address"];?></td>
					<td style="text-align:center;"><?php echo number_format($key["ticket_price"]);?> VNĐ</td>
					<td style="text-align:center;"><?php echo number_format($key["ticket_price_hasteach"]);?> VNĐ</td>
					<td>
						<span class="label <?php echo ($key["flag"] == 1) ? "label-success":"label-warning";?>">
							<?php echo ($key["flag"] == 1) ? "Hiển thị":"Tạm ẩn";?>
						</span>
					</td>
					<td style="text-align:center">
						<p>
							<a href="index.php?controller=add_edit_pool_address&act=edit&id=<?php echo $key["id"];?>" class="btn btn-info btn-sm">
								<i class="fa fa-edit"></i> Sửa
							</a>
						</p>
						<p>
							<a onclick="return window.confirm('Có muốn xóa ?')" href="index.php?controller=pool_address&act=delete&id=<?php echo $key["id"];?>" title="Xóa hình ảnh" class="btn btn-danger btn-sm">
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
                    <a href="index.php?controller=pool_address&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
		</div>
	</div>
</div>
</div>