    <!-- endmain -->
    <br><br>
    <!-- footer  -->
    <div class="footer">
        <div class="title_foot">Trung tâm đào tạo và dạy bơi ABC</div>
        <div class="address_foot"><span style="text-decoration: underline">Địa chỉ</span>: Số 000, Quốc lộ 32, Quận Bắc Từ liêm Hà Nội</div>
        <div class="contact_foot">
        <span style="margin-right: 10px;"><span style="text-decoration: underline">Điện thoại</span>: (04) 867887623</span>
        <span><span style="text-decoration: underline">Email</span>: supportlaixe@gmail.com</span>
        </div>
    </div>
    <!-- endfooter  -->
    <!-- </div> -->

<script>
    jssor_1_slider_init();
        if (window.screen.width > 768) {
            $('.navbar .dropdown').hover(function() {
                $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
            }, function() {
                $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
            });
        }
</script>
<script type='text/javascript'>
$(function() {
 $(window).scroll(function() {
 if ($(this).scrollTop() != 0) {
 $('#bttop').fadeIn();
 } else {
 $('#bttop').fadeOut();
 }
 });
 $('#bttop').click(function() {
 $('body,html').animate({
 scrollTop: 0
 }, 800);
 });
});
</script>
<div id='bttop'><img src="public/images/topButtonImage.png"></div>