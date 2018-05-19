<div class="">
    <!--  --><br>
    <div class="row">
        <div class="col-md-12">
            <div class="bg-line">
                <p class="bg-primary custom-bg"><i class="fa fa-info-circle"></i> Giới thiệu các khóa học tiêu chuẩn</p>
            </div>
            <div class="col-md-12">
				<?php
					$stt=0;
					foreach ($courses_new as $key) {
                ?>
               
                <div class="" stlye="overflow: hidden; text-align: justify;">
					<div class="head-course-intro" style="padding: 10px;">
                        <span style="color: #0580ff; font-size: 24px; "><i class="fa fa-tags"></i> <?php echo $key["course_name"];?></span>
                    </div>
                        
                    <div style="clear:both">
                    <p class="label <?php echo ($key["flag"] == 1) ? "label-success":"label-warning";?>">
					    <?php echo ($key["flag"] == 1) ? "Đang mở lớp":"Lớp ngừng mở";?>
                    </p>
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
                        <span style="font-weight: 600">Thời lượng:&nbsp;&nbsp;&nbsp;</span>
                        <span><?php echo $key['duration'];?></span>
                    </p>
                    <p style="margin-bottom:3">
                        <span style="font-weight: 600">Số buổi:&nbsp;&nbsp;&nbsp;</span>
                        <span><?php echo $key['time'];?></span>
                    </p>
                    <p style="margin-bottom:3">
                        <span style="font-weight: 600">Tên giảng viên:&nbsp;&nbsp;&nbsp;</span>
                        <span style="color: #e74c3c; font-weight: 600"><?php echo $key['teacher_name'];?></span>
                    </p>
                    <p style="margin-bottom:3">
                        <span style="font-weight: 600">Số điện thoại:&nbsp;&nbsp;&nbsp;</span>
                        <span style="color:#e74c3c">0<?php echo $key['phone'];?></span>
                    </p>
                    </div>
                    
                </div>
                <hr>
                <?php  } ?>
            </div>
        </div>
    </div>
    <div style="margin-left: 30px; padding-bottom: 20px">
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
                <a href="cac-khoa-hoc-sap-mo.html&p=<?php echo $i;?>"><?php echo $i;?></a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
