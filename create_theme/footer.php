<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package createtheme
 */

?>

<?php dynamic_sidebar('foodter-link'); ?>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/tap-chi-dong-y-logo.png" alt=""></a>
                    <p class="footer-adress"><strong>Trụ sở chính:</strong>  91 Nguyễn Xiển, Hạ Đình, Thanh Xuân, HN</p>
                    <p><strong>Cố vấn chuyên môn: </strong>  TS BS Nguyễn Thị Vân Anh</p>
                    <p><strong>Đơn vị chủ quản:<a href="#" class="footer-link-address"> Viện Y Dược cổ truyền dân tộc</a></strong></p>
                    <p>(Giấy phép hoạt động số 740/QĐ - LHHVN do bộ khoa học và công nghệ cấp ngày 16/07/2018)</p>
                    <div class="footer-icon">
                        <ul class="footer-icon-list">
                            <li class="list-icon-item icon-fac"><a href="#" class="link-icon"><i class="fa fa-facebook fa-1x" aria-hidden="true"></i></a></li>
                            <li class="list-icon-item icon-insta"><a href="#" class="link-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="list-icon-item icon-you"><a href="#" class="link-icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            <li class="list-icon-item  icon-twit"><a href="#" class="link-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-icon-item icon-print"><a href="#" class="link-icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h5>Thông Tin Chính Sách</h5>
                    <?php 
						$bootstrap_walker = new WP_Bootstrap_Navwalker;
						$menu = array(
							'theme_location' => 'menu-footer',
							'container'         => 'false',
							'menu_class'        => 'list footer-list-page',
							'walker' => $bootstrap_walker
						);
						wp_nav_menu( $menu );
					?>
                </div>
                <div class="col-12 col-md-4">
                    <form action="" class="form-register-new">
                        <h5 >ĐĂNG KÝ NHẬN BẢN TIN</h5>
                        <input type="email" placeholder="Email" name="email" class="email-footer">
                        <button><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        <p>Nhận những thông tin sức khỏe hữu ích và tin cậy nhất với hơn 30.000 bài viết về bệnh, thuốc, thảo dược, thai kỳ, bí quyết sống khỏe mỗi ngày.</p>
                    </form>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/dmca-badge-w200-5x1-01.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <div class="copright text-center">
        <p>© Copyright 2020 - <span>Tạp chí Đông Y</span> là TRANG THÔNG TIN TRUYỀN THÔNG NỘI BỘ</p>
        <p>Các bài viết chỉ có tính chất tham khảo, không thay thế cho việc chẩn đoán hoặc điều trị</p>
    </div>

<?php wp_footer(); ?>

</body>
</html>
