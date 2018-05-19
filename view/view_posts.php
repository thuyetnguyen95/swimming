<div class="row">
<div class="col-md-12">
      <div class="bg-line">
        <p class="bg-primary custom-bg"><i class="fa fa-tags">&nbsp;</i>
          <?php
            if ($type == 1) { echo "Các thông tin bơi lội nổi bật";}
            if ($type == 2) { echo "Các kỹ thuật bơi ếch";}
            if ($type == 3) { echo "Các kỹ thuật bơi sải";}
            if ($type == 4) { echo "Các kỹ thuật bơi ngửa";}
            if ($type == 5) { echo "Các kỹ thuật bơi bướm";}
          ?>
        </p>
      </div>
      <?php if ($type != 1) { ?>
      <div class="col-md-12">
          <h3 class="title-content-child"><?php echo $posts['title'];?></h3>
          <div class="content-child">
            <?php echo $posts['content'];?>
          </div>
      </div>

    <?php } if ($type == 1) {
        foreach ($posts as $key => $postWithType) {

    ?>
      <!-- post -->
      <div class="col-md-12" style="border-bottom: 1px solid #ddd;margin-bottom: 10px; padding: 10px;">
            <div class="col-md-4">
                <img src="<?php echo $postWithType['image'];?>" alt="" width="100%">
            </div>
            <div class="col-md-8">
                <p style="color: #018DD0; font-size: 18px; margin-bottom: 0px;">
                    <a href="<?= changeTitle($postWithType['title'])?>-<?php echo $postWithType['id'];?>.html">
                        <i class="glyphicon glyphicon-bookmark"></i> <?php echo $postWithType['title'];?>
                    </a>
                </p>
                <div class="text-muted" style="padding-left: 25px;">
                    <i><span>Đăng bởi 
                        <?php
                            $adminID = $postWithType['admin_id'];
                            $adminData = fetch_one("select tts_fullname from tts_admin where tts_id = $adminID");
                            echo $adminData['tts_fullname'];
                        ?>
                    </span>&nbsp;-&nbsp;<span>Ngày đăng: <?php echo date('d-m-Y',strtotime($postWithType['create_date']));?></span></i>
                </div>
                <div class="" style="margin: 10px 0px;">
                    <?php echo $postWithType['description'];?>
                </div>
                <p class="pull-right">
                    <a href="<?= changeTitle($postWithType['title'])?>-<?php echo $postWithType['id'];?>.html">Đọc tiếp ---></a>
                </p>
            </div>
        </div>
        <!-- end post -->
        <?php } } ?>
        <?php if($type ==1) {?>
        <div style="margin-left: 30px;">
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
                    <a href="cac-kien-thuc-boi-loi.html&p=<?php echo $i;?>"><?php echo $i;?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
  </div>
</div>