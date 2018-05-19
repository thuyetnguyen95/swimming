<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-line">
                <p class="bg-primary custom-bg">
                <i class="fa fa-info"></i>
                    Giới thiệu về trung tâm</p>
            </div>
            <div class="col-md-12" style="overflow: hidden; text-align: justify">
                <h3 class="title-content-child"><?= $pool_intro['title'];?></h3>
                <div class="content-child">
                    <?= $pool_intro['content'];?>
                </div>
            </div>
        </div>
    </div>
    <!--  --><br>
    <div class="row">
        <div class="col-md-12">
            <div class="bg-line">
                <p class="bg-primary custom-bg"><i class="fa fa-newspaper-o"></i> Thông tin một số khóa học tại trung tâm</p>
            </div>
            <br>
            <div class="col-md-12">
                <h4 class="title-content-child2">I: Chi tiết về khóa học tiêu chuẩn tại trung tâm</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="success title-table">
                                <th rowspan="2" style="text-align: center;  padding-bottom: 30px;">STT</th>
                                <th style="text-align: center">Kiểu bơi</th>
                                <th rowspan="2" style="text-align: center; padding-bottom: 30px; width: 125px;">Bơi ếch</th>
                                <th rowspan="2" style="text-align: center; padding-bottom: 30px;">Bơi sải</th>
                                <th rowspan="2" style="text-align: center; padding-bottom: 30px;">Bơi ngửa</th>
                                <th rowspan="2" style="text-align: center; padding-bottom: 30px;">Bơi bướm</th>
                            </tr>
                            <tr class="success title-table">
                                <th style="text-align: center">Loại lớp học</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $stt = 0;
                                foreach ($courses as $key => $course) {
                                    $stt++;
                            ?>
                            <tr>
                                <td><?= $stt;?></td>
                                <td><?= $course['name'];?></td>
                                <td><?= number_format($course['course_price_1']);?> VNĐ</td>
                                <td><?= number_format($course['course_price_2']);?> VNĐ</td>
                                <td><?= number_format($course['course_price_3']);?> VNĐ</td>
                                <td><?= number_format($course['course_price_4']);?> VNĐ</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>    
                </div>
                <!--  -->
                <h4 class="title-content-child2">II: Địa điểm học bơi</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="success">
                                <th style="width: 50px;">STT</th>
                                <th style="width: 200px;">Tên bể bơi</th>
                                <th>Địa chỉ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $stt = 0;
                                foreach ($pool_info as $key => $pool) {
                                    $stt++;
                            ?>
                            <tr>
                                <td><?php echo $stt;?></td>
                                <td><?= $pool['name'];?></td>
                                <td><?= $pool['address'];?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>    
                </div>
                <!--  -->
                <h4 class="title-content-child2">III: Giá vé vào cửa tháng <?php echo date("m - Y");?> (mới nhất)</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="success">
                                <th style="width: 50px;">STT</th>
                                <th style="width: 300px;">Tên bể bơi</th>
                                <th>Giá vé lượt</th>
                                <th>Giá vé khi đăng ký học</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $stt = 0;
                                foreach ($pool_info as $key => $pool) {
                                    $stt++;
                            ?>
                            <tr>
                                <td><?php echo $stt;?></td>
                                <td><?= $pool['name'];?></td>
                                <td><?= number_format($pool['ticket_price']);?> VNĐ</td>
                                <td><?= number_format($pool['ticket_price_hasteach']);?> VNĐ</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>    
                </div>
            </div>
        </div>
    </div>
    <!--  --><br>
    <div class="row">
        <div class="col-md-12">
            <div class="bg-line">
                <p class="bg-primary custom-bg"><i class="fa fa-tags"></i> Thông tin bổ sung</p>
            </div>
            <div class="col-md-12">
                <h3><?php echo $pool_intro_plus['title'];?></h3>
                <div class="" stlye="overflow: hidden; text-align: justify">
                    <?php  echo $pool_intro_plus['content'];?>
                </div>
            </div>
        </div>
    </div>
</div>
