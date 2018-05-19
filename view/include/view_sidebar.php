<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-line">
                <p class="bg-primary custom-bg">Các khóa học bơi sắp mở</p>
            </div>
            <?php
                foreach ($courses_new as $key => $course_new) {
            ?>
            <div class="" style="margin: 10px; padding-bottom:10px; border-bottom: 1px solid #eee">
                <div>
                    <span style="font-weight: 700">Khóa học: </span><span><?php echo $course_new['course_name'];?></span>
                </div>                            
                <div>
                    <span style="font-weight: 700">Thời gian mở lớp: </span><span style="color:#428bca"><?php echo date('d-m-Y', strtotime($course_new['course_open']));?></span>
                </div>                            
                <div>
                    <span style="font-weight: 700">Đối tượng tham gia: </span><span><?php echo $course_new['participants'];?></span>
                </div>                            
                <div>
                    <span style="font-weight: 700">Học phí: </span><span style="color: #e74c3c"><?php echo number_format($course_new['course_price']);?></span> VNĐ
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!--  -->
    <div class="row">
        <div class="col-md-12">
            <div class="bg-line">
                <p class="bg-primary custom-bg">Bể bơi của trung tâm</p>
            </div>
            <div class="col-md-12" style="margin-top: 15px;">
                <?php echo $youtube['title'];?>
                <div class="" style="margin: 10px 0px;">
                    <?php echo $youtube['url'];?>
                </div>        
            </div>
        </div>
    </div>
    <!--  --><br>
    <div class="row">
        <div class="col-md-12">
            <div class="bg-line">
                <p class="bg-primary custom-bg">Trang Fanpage</p>
            </div>
            <div class="" style="margin: 10px;">
                <?php echo $facebook['iframe'];?>
                <?php echo $facebook['url'];?>
            </div>
        </div>
    </div>
    <!--  --> <br>
    <div class="row">
        <div class="col-md-12">
            <div class="bg-line">
                <p class="bg-primary custom-bg">Các bài viết mới</p>
                <div class="col-md-12" style="margin-top: 15px;">
                    <?php
                        foreach ($posts as $key => $postSidebar) {
                    ?>
                        <p> <i class="fa fa-tag"></i>  <a href="<?= changeTitle($postSidebar['title'])?>-<?= $postSidebar['id'];?>.html"><?php echo $postSidebar['title'];?></a></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>