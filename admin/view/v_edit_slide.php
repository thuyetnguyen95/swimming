<div class="row" style="margin-top: 5px; ">
	<div class="col-md-2">Trạng thái hiển thị</div>
	<div class="col-md-10">
		<input type="radio" name="flag" value="1" id="show" <?php echo ($arr["flag"]== 1)? "checked":"" ;?>>
		<label for="show">Cho phép hiển thị</label>
		<input type="radio" name="flag" value="0" id="hidden" <?php echo ($arr["flag"]== 0)? "checked":"" ;?>>
		<label for="hidden">Tạm thời ẩn</label>
	</div>
</div>
