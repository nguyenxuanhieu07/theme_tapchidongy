<?php

get_header();
?>
    <?php get_template_part('blocks/home','top-post'); ?>
    <?php get_template_part('blocks/home','popular-post'); ?>
    
    <section class="home-category">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php dynamic_sidebar('homepage-middle-post') ?>
                </div>
                <div class="col-md-3 sidebar-category">
                    <?php dynamic_sidebar('homepage-left-post') ?>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="home-post-lore">
        <div class="container">
            <a class="home-post-title" href="#">Kiến Thức Bệnh</a>
            <div class="row">
                <div class="col-md-3">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section01/co-che-dieu-tri-cua-phu-khang-tan-540x351.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Bác sĩ Lê Phương trị bệnh phụ khoa có tốt không? Người bệnh nói gì</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section01/dieu-tri-di-tinh-bang-dong-y-the-duong-hu-540x358.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Điều trị di tinh bằng đông y: Top 13 bài thuốc cho hiệu quả và lưu ý quan trọng</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section01/dieu-tri-benh-vang-tinh-trung-bang-thuoc-tay-y-540x359.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Top 5 cách chữa tinh trùng màu vàng mà chàng nên biết</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section01/stud-100-dai-dien-540x402.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Stud 100 Chính Hãng Dùng Thế Nào Tốt? Cách Nhận Biết Hàng Thật Giả</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section01/dieu-tri-xuat-tinh-som-bang-thuoc-nam-tot-khong-540x354.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Điều trị xuất tinh sớm bằng thuốc nam: Top 12 bài thuốc giúp quý ông…</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/thuoc-tang-cuong-sinh-ly-nam-cua-uc-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Top 6 thuốc tăng cường sinh lý nam của Úc được tin dùng nhiều nhất</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/thuc-pham-tang-cuong-sinh-ly-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Top 20 thực phẩm tăng cường sinh lý nam giúp trở lại thời “mãnh hổ”</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/tinh-trung-yeu-nen-an-gi-dai-dien-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Tinh trùng yếu nên ăn gì, không nên ăn gì cho khỏe, dễ thụ thai?</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section class="home-category">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h5 class="category-title-cate"><span class="category-title-link"><a class="title-link" href="#">BÀI THUỐC CHỮA BỆNH</span></span></h5> 
                    <div class="row category-medicine">
                        <div class="col-md-5">
                            <ul class="post list-category">
                                <li class="item-category"><a href="#" class="post-link">Một ngày uống 2 lần, sau 3 tháng tôi đã lấy lại được bản lĩnh…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Ngự y Nguyễn Địch và bài thuốc chữa thoái hoá khớp cho các đời Vua…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Top 5 bài thuốc Đông y trị sỏi thận được chuyên gia khuyên dùng</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Những biến chứng nguy hiểm của sỏi đường mật người bệnh không thể ngờ tới</a></li>
                                <li class="item-category bottom-li"><a href="#" class="post-link">Sỏi ống mật chủ: Triệu chứng, nguyên nhân, cách điều trị hiệu quả bằng thuốc…</a></li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/cac-cach-chua-yeu-sinh-ly-xuat-tinh-som-5-min-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Cách chữa yếu sinh lý, xuất tinh sớm an toàn,…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/thanh-phan-bai-thuoc-thanh-hau-bo-phe-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Những trường hợp nên và không nên phẫu thuật trị…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/phau-thua-tri-soi-mat-nen-hay-khong-2-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Thanh Hầu Bổ Phế Thang bài thuốc VÀNG điều trị…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/bac_si_ha_chua_benh_2-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Hiệu quả bài thuốc điều trị bệnh phụ khoa của…</a>
                                        </h3>
                                    </div>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <h5 class="category-title-cate"><span class="category-title-link"><a class="title-link" href="#">Dược Liệu</span></span></h5> 
                    <div class="row category-medicine">
                        <div class="col-md-5">
                            <ul class="post list-category">
                                <li  class="item-category"><a href="#" class="post-link">Hầu vĩ tóc – vị thuốc quý chữa xương khớp ít người biết</a></li>
                                <li  class="item-category"><a href="#" class="post-link"> Tinh bột nghệ – Phân biệt, tác dụng, cách dùng và những lưu ý cần…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Saffron Vietfarm: Địa chỉ cung ứng Saffron Tây Ban Nha uy tín, chất lượng nhất…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Cây bình vôi – Công dụng và những bài thuốc điều trị bệnh hiệu quả</a></li>
                                <li class="item-category bottom-li"><a href="#" class="post-link">Gian Nan Hành Trình Vượt Rừng, Lội Suối “Đi Săn” Nấm Lim Xanh Ở Những…</a></li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/dang-sam-2-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Đẳng sâm – “Nhân sâm người nghèo” chữa bách bệnh…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/cay-mat-gau-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Cây Mật Gấu – Hình Ảnh, Công Dụng Và Các…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/ca-ngua-6-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Cá Ngựa (Hải Mã) Và Những Công Dụng Tuyệt Vời…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/cay-muong-trau-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Cây muồng trâu: Thông tin cần biết về cây thuốc…</a>
                                        </h3>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                    <h5 class="category-title-cate"><span class="category-title-link"><a class="title-link" href="#">HOẠT ĐỘNG NGHIÊN CỨU</span></span></h5> 
                    <div class="row product-medicine">
                        <div class="col-md-5">
                            <ul class="post list-category">
                                <li class="item-category"><a href="#" class="post-link">Ra mắt bài thuốc Quốc dược Phục cốt khang và phác đồ điều trị bệnh…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Viện Y Dược Cổ Truyền Dân Tộc Công Bố Hiệu Quả Bài Thuốc Định Tâm…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Hợp Tác Nghiên Cứu Ứng Dụng Cây Tầm Gửi Điều Trị Bệnh Xương Khớp</a></li>
                                <li class="item-category"><a href="#" class="post-link"> TradiMec Và Sứ Mệnh Bảo Tồn, Phát Huy Tinh Hoa Nền Y Học Cổ Truyền</a></li>
                                <li class="item-category bottom-li"><a href="#" class="post-link">Công Bố Nghiên Cứu Và Ứng Dụng Thành Công Vị Thuốc Kê Huyết Đằng Chữa…</a></li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/vien-y-duoc-dan-toc-khao-sat-thuoc-nam-bac-kan-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Viện NC&PT Y Dược Cổ Truyền Dân Tộc Khảo Sát…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/le-ra-mat-scbvt-the-he-2-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Thuốc dân tộc nghiệm thu đề tài nghiên cứu và…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/de-an-nghien-cuu-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">THÔNG BÁO: Ra mắt Website đề án nghiên cứu &…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/nghien-cuu-so-can-binh-vi-tan-2-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Ứng dụng tinh hoa YHCT trong nghiên cứu Sơ can…</a>
                                        </h3>
                                    </div>
                                </div>                     
                            </div>
                        </div>
                    </div>
                    <h5 class="category-title-cate"><span class="category-title-link"><a class="title-link" href="#">TIN VIỆN Y DƯỢC</span></span></h5> 
                    <div class="row product-medicine">
                        <div class="col-md-5">
                            <ul class="post list-category">
                                <li class="item-category"><a href="#" class="post-link">Lễ ký kết hợp tác: Dịch vụ trị liệu giữa Trung tâm Ứng dụng Đông…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Lễ công bố Quyết định thành lập Hội đồng nghiên cứu bài thuốc Sơ can…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Viện Y dược Cổ truyền Dân Tộc Ký kết hợp tác với Trung tâm Thuốc…</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Ký kết hợp tác giữa Viện Y dược cổ truyền và Trung tâm da liễu…</a></li>
                                <li class="item-category bottom-li"><a href="#" class="post-link">Viện Nghiên Cứu Và Phát Triển Y Dược Cổ Truyền Dân Tộc Khảo Sát Thực…</a></li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/tam-gui-cay-dau-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Hợp Tác Nghiên Cứu Ứng Dụng Cây Tầm Gửi Điều…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/le-ra-mat-scbvt-the-he-2-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Thuốc dân tộc nghiệm thu đề tài nghiên cứu và…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/chup-anh-luu-niem-hai-don-vi-hop-tac-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Ký kết hợp tác sáng lập Nhất Nam Y Viện…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/vien-truong-nguyen-thi-van-anh-toi-muon-nghien-cuu-va-phat-trien-nhung-bai-thuoc-dan-toc-viet-nam-1-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Quyết định thành lập Viện Nghiên cứu và Phát triển…</a>
                                        </h3>
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                    <h5 class="category-title-cate"><span class="category-title-link"><a class="title-link" href="#">Y HỌC LÂM SÀNG</span></span></h5> 
                    <div class="medicine-title medicine-title-five">
                        <a href="#"></a>
                    </div>
                    <div class="row product-medicine">
                        <div class="col-md-5">
                            <ul class="post list-category">
                                <li class="item-category"><a href="#" class="post-link">Cập nhật phương pháp chẩn đoán và điều trị sỏi mật mới nhất</a></li>
                                <li class="item-category"><a href="#" class="post-link">Hội chứng sốc nhiễm trùng từ bệnh học đến lâm sàng [Update mới nhất]</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Kỹ thuật thông tim và những biến chứng đối với mạch máu</a></li>
                                <li class="item-category"><a href="#" class="post-link"> Hội chứng gan thận (HRS) và hướng xử trí hiệu quả nhất</a></li>
                                <li class="item-category bottom-li"><a href="#" class="post-link">Điều trị bệnh nhân tăng huyết áp kèm đái tháo đường [Update mới nhất]</a></li>
                            </ul>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/cong-huong-tu-khop-vai-4-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Chụp cộng hưởng từ khớp vai (MRI) và những ý…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/nhiem-trung-toan-than-2-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Hội chứng nhiễm trùng toàn thân Sepsis [Cập nhật mới…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/soi-ong-mat-chu-1-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Chẩn đoán và phác đồ điều trị sỏi ống mật…</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class=" col-md-6 post">
                                    <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/thua-can-beo-phi-2-1-255x155.jpg" alt=""></a>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#" class="post-link">Thừa cân béo phì là gì? Những kiến thức cần…</a>
                                        </h3>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="col-md-3 sidebar-category">
                    <h5 class="sidebar-category-title"><a class="sidebar-category-link" href="#">Dinh Dưỡng Cần Biết</a></h5>
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/cach-chua-benh-gut-bang-qua-dua-1-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">TOP 3 cách chữa bệnh gút bằng quả dừa đơn giản tại nhà</a>
                            </h3>
                        </div>
                    </div>
                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/benh-gut-uong-nuoc-dua-duoc-khong-1-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Bệnh gút uống nước dừa được không? Giải đáp chi…</a>
                            </h3>
                        </div>
                    </div>
                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/bi-gout-an-oc-duoc-khong-1-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Bị gout ăn ốc được không? Người bệnh cần lưu…</a>
                            </h3>
                        </div>
                    </div>
                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/benh-gout-nen-an-thit-gi-1-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Bệnh gout nên ăn thịt gì? Tổng hợp các loại…</a>
                            </h3>
                        </div>
                    </div>
                    <h5 class="sidebar-category-title"><a class="sidebar-category-link" href="#">Văn Bản Ban Ngành</a></h5>
                    <h5 class="sidebar-category-title"><a class="sidebar-category-link" href="#">Phác đồ điều trị</a></h5>
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/thieu-mau-trong-suy-than-man-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Điều trị thiếu máu trong suy thận mạn cho người bệnh hiệu quả</a>
                            </h3>
                        </div>
                    </div>
                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/dai-mau-5-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Tiếp cận chẩn đoán đái máu và phác đồ điều…</a>
                            </h3>
                        </div>
                    </div>
                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/viem-mach-di-ung-2-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Viêm mạch dị ứng: Chẩn đoán và cách điều trị…</a>
                            </h3>
                        </div>
                    </div>
                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/cap-cuu-ngung-tuan-hoan-co-ban-4-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Phác đồ cấp cứu ngừng tuần hoàn cơ bản Bộ…</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-question">
        <div class="container">
            <p><a class="question-title" href="#">Hỏi Đáp</a></p>
            <div class="row">
                <div class="col-md-4">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/cao-gam-chua-gout-1-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Cao gắm chữa gout có tốt không? Cách sử dụng</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/Thong-be-Loi-nieu-hoan-255x155.png" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Đẳng sâm – “Nhân sâm người nghèo” chữa bách bệnh…</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="list-post">
                        <li class="item-post"><a href="#" class="item-link">Thông khiếu cửu vị hoàn chữa viêm xoang có tốt không?</a></li>
                        <li class="item-post"><a href="#" class="item-link">Thuốc chữa đau dạ dày nên dùng Tây y hay Đông y</a></li>
                        <li class="item-post"><a href="#" class="item-link"> TOP 3 cách chữa bệnh gút bằng quả dừa đơn giản tại nhà</a></li>
                        <li class="item-post bottom-li"><a href="#" class="item-link">Bị gout ăn ốc được không? Người bệnh cần lưu ý điều gì?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="home-new-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h5 class="category-title-cate"><span class="category-title-link"><a class="title-link" href="#">TIN TỨC SỰ KIỆN</span></span></h5>
                    <div class="row">
                        <div class="post new-footer-post">
                            <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/chuyen-gia-danh-gia-dong-trung-vietfarm-4-384x250.jpg" alt=""></a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#" class="post-link">Các chuyên gia sức khoẻ hàng đầu gợi ý cách phòng chống dịch bệnh Covid-19…</a>
                                </h3>
                                <p class="post-description">Những ngày gần đây, Việt Nam đối mặt với nguy cơ bùng phát dịch bệnh Covid-19 diện rộng với sự xuất hiện của biến chủng virus mới có độc tính và tốc độ lây nhiễm…</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="post">
                                <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/mobile_save_distr-255x155 .jpg" alt=""></a>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#" class="post-link">Tin vui cho hàng triệu chị em phụ nữ – Chữa bệnh phụ khoa chưa…</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="post">
                                <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/chuong-trinh-cuoi-nam-255x155.jpg" alt=""></a>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#" class="post-link">Nhà Thuốc Đỗ Minh Đường Tặng Quà Ưu Đãi Chăm Sóc Sức Khỏe Xuân Nhâm…</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="post">
                                <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/thuong-hieu-1-255x155.jpg" alt=""></a>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#" class="post-link">DrVitamin – Nền Tảng Liên Kết Cung Cấp Đa Dạng Giải Pháp Chăm Sóc Sức…</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sidebar-category">
                    <h5 class="sidebar-category-title"><a class="sidebar-category-link" href="#">Danh Y</a></h5>
                    <div class="post">
                        <a href="#" class="post-thumnail"><img class="post-img" src="<?php echo get_template_directory_uri(); ?>/images/section02/Ngu-y-nguyen-dich-255x155.png" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#" class="post-link">Ngự y Nguyễn Địch và bài thuốc chữa thoái hoá…</a>
                            </h3>
                        </div>
                    </div>

                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/luong-y-do-minh-tuan-chua-viem-cau-than-tre-em-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Gặp gỡ danh y và bài thuốc chữa viêm cầu…</a>
                            </h3>
                        </div>
                    </div>
                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/luong-y-pham-trong-hung-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Lương y Phạm Trọng Hùng – Tiểu sử và những…</a>
                            </h3>
                        </div>
                    </div>
                    <div class="post post-small">
                        <a href="#" class="post-small-thumnail"><img src="<?php echo get_template_directory_uri(); ?>/images/section02/luong-y-chua-thoat-vi-dia-dem-2-2-1-255x155.jpg" alt=""></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="#" class="post-link">Lương y chữa thoát vị đĩa đệm có tài, có…</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->
<?php
get_footer();
