<div class="row">
    <?php
        foreach ($teachers as $key => $teacher) {
    ?>
    <div class="col-md-12">
        <div class="bg-line">
            <p class="bg-primary custom-bg"><i class="fa fa-user-circle-o">&nbsp;</i>Giới thiệu về giảng viên</p>
        </div>
        <div class="col-md-12">
            <div class="content-child">
                <?php echo $teacher['content'];?>
            </div>
        </div>
    </div>
    <p>&nbsp;</p>
    <?php } ?>
</div>