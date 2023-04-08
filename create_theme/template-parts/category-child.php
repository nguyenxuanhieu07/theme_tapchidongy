<?php 
    $category = $args['infor'];
    // $terms_list = get_the_category( $category->term_id);
	// 	echo "<pre>";
	// 	print_r($terms_list);
	// 	echo "</pre>";
	// 	die();
?>
<div class="container nam-khoa-link">
        <?php echo get_category_parents( $category->term_id, true, ' &raquo; ' ); ?>
        <hr>
    </div>
    <div class="container nam-khoa-title">
        <h1><?php echo $category->name; ?></h1>
        <hr>
        <span>bao quy đầu, rối loạn cương dương, yếu sinh lý, xuất tinh sớm, di tinh mộng tinh, liệt dương, tinh trùng yếu</span>
    </div>
    <section class="nam-khoa-new">
        <div class="container">
            <div class="nam-khoa-new-title">
                <p class="title"><a href="#">BỆNH TINH TRÙNG</a></p>
                <ul>
                    <li class="list-item-bottom"><a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="row nam-khoa-row">
                <div class="col-12 col-md-5">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/tinh-trung-yeu-nen-an-gi-dai-dien-398x250.jpg" alt=""></a>
                    <p ><a class="item-title" href="#">Tinh trùng yếu nên ăn gì, không nên ăn gì cho khỏe, dễ thụ thai?</a></p>
                    <p class="item-description">Tinh trùng yếu nên ăn gì, kiêng ăn gì thì dễ thụ thai là vấn…</p>
                </div>
                <div class="col-12 col-md-7 nam-khoa-row-right">
                    <div class="row">
                        <div class="col-md-5">
                            
                            <a href="<?php echo get_post_permalink(82); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/tinh-trung-song-duoc-bao-lau-trong-bao-cao-su-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-md-7">
                            <p><a class="item-title" href="<?php echo get_post_permalink(82); ?>">Tinh trùng sống được bao lâu trong bao cao su? Sự thật bất ngờ</a></p>
                            <p class="item-description">Tinh trùng sống được bao lâu trong bao cao su là kiến thức về sức khỏe giới tính bạn nên tìm hiểu kỹ. Ngoài ra,…</p>
                        </div>
                        
                    </div>
                    <hr>
                    <ul>
                        <li><a href="#">Top 5 cách chữa tinh trùng màu vàng mà chàng nên biết</a></li>
                        <li><a href="#">Cách kiểm tra tinh trùng bằng mắt thường, tinh dịch đồ chuẩn xác nhất</a></li>
                        <li><a href="#">Tôi đã chữa khỏi bệnh suy giảm ham muốn bằng Uy Long Đại Bổ như thế nào?</a></li>
                        <li><a href="#">Uy Long Đại Bổ: Bài thuốc cung đình chữa rối loạn cương dương được cam kết hiệu quả</a></li>
                        <li class="item-list-bottom"><a href="#">Top 8 Cách Trị Tinh Trùng Loãng Tại Nhà An Toàn Nhanh Chóng</a></li>
                    </ul>
                </div>
            </div>
            <div class="nam-khoa-new-title">
                <p class="title"><a href="#">Di Tinh</a></p>
                <ul>
                    <li class="list-item-bottom"><a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="row nam-khoa-row nam-khoa-row-second">
                <div class="col-12 col-md-4">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/dieu-tri-di-tinh-bang-dong-y-the-duong-hu-377x250.jpg" alt=""></a>
                    <p ><a class="item-title" href="#">Điều trị di tinh bằng đông y: Top 13 bài thuốc cho hiệu quả cao…</a></p>
                    <p class="item-description">Điều trị di tinh bằng đông y là phương pháp được đánh giá cao nhờ…</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/thuoc-chua-benh-di-tinh-dai-dien--255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Tinh trùng sống được bao lâu trong bao cao su? Sự thật bất ngờ</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/yeu-sinh-ly-3-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Tôi đã chữa khỏi bệnh suy giảm ham muốn bằng Uy Long Đại Bổ như…</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/cach-chua-roi-loan-cuong-duong-01-min-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Uy Long Đại Bổ: Bài thuốc cung đình chữa rối loạn cương dương được cam…</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/chua-di-tinh-don-gian-dai-dien-1-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">14 Cách Chữa Di Tinh Đơn Giản Tại Nhà Hiệu Quả Bất Ngờ 2023</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 nam-khoa-row-right ">
                    <ul>
                        <li><a href="#">Mãnh Lực Khang Là Thuốc Gì? Tốt Thật Không, Giá Bao Nhiêu?</a></li>
                        <li><a href="#">Không Bị Yếu Sinh Lý Có Sử Dụng Uy Long Đại Bổ Tửu Được Không?</a></li>
                        <li><a href="#">Bài thuốc rượu ngâm Uy Long Đại Bổ Tửu giúp anh em “nhạy” trong chuyện ấy</a></li>
                        <li><a href="#">Review bài thuốc Uy Long Đại Bổ Tửu có tốt không?</a></li>
                        <li class="item-list-bottom"><a href="#">Nghiên cứu và phục dựng tinh hoa YHCT triều Nguyễn trong điều trị bệnh sinh lý nam</a></li>
                    </ul>
                </div>
            </div>
            <div class="nam-khoa-new-title">
                <p class="title"><a href="#">LIỆT DƯƠNG</a></p>
                <ul>
                    <li class="list-item-bottom"><a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="row nam-khoa-row nam-khoa-row-second">
                <div class="col-12 col-md-4">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/benh-liet-duong-tam-thoi-376x250.jpg" alt=""></a>
                    <p ><a class="item-title" href="#">Liệt dương tạm thời là gì? Nguyên nhân, dấu hiệu và cách điều trị dứt…</a></p>
                    <p class="item-description">Liệt dương tạm thời là nỗi sợ hãi của không ít nam giới Việt. Bởi…</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/benh-liet-duong-an-gi-tot-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Liệt dương nên ăn gì, kiêng ăn gì? Danh sách thực phẩm do chuyên gia…</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/bam-huyet-chua-liet-duong-2-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Bấm huyệt chữa liệt dương có hiệu quả không? Áp dụng như thế nào?</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/liet-duong-vi-tap-the-hinh-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Thực hư thông tin liệt dương vì tập thể hình? Chuyên gia giải đáp</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/chua-liet-duong-o-dau-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Chữa liệt dương ở đâu? Top 10+ bệnh viện trị bệnh chất lượng cao</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 nam-khoa-row-right ">
                    <ul>
                        <li><a href="#">Cách làm liệt dương đàn ông và bài học cảnh tỉnh nhiều người</a></li>
                        <li><a href="#">Địa chỉ bán thuốc liệt dương uy tín tại Hà Nội và TP. Hồ Chí Minh</a></li>
                        <li><a href="#">Cao trăn có tác dụng gì? Uống cao trăn có bị liệt dương không?</a></li>
                        <li><a href="#">Chồng bị liệt dương phải làm sao? 8 việc chị em cần thực hiện để hỗ trợ chồng/a></li>
                        <li class="item-list-bottom"><a href="#">Liệt dương có chữa được không? Các phương pháp giúp nam giới “sung sướng” trở lại</a></li>
                    </ul>
                </div>
            </div>
            <div class="nam-khoa-new-title">
                <p class="title"><a href="#">MỘNG TINH</a></p>
                <ul>
                    <li class="list-item-bottom"><a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="row nam-khoa-row nam-khoa-row-second">
                <div class="col-12 col-md-4">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/cach-tri-dut-diem-mong-tinh-dai-dien-415x233.jpg" alt=""></a>
                    <p ><a class="item-title" href="#">Cách trị dứt điểm bệnh mộng tinh phái mạnh nhất định phải biết</a></p>
                    <p class="item-description">Mộng tinh là hiện tượng không hiếm gặp ở nhiều người, đặc biệt là giới…</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/mong-tinh-an-gi-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Mộng tinh ăn gì, kiêng gì? Những món ngon bổ dưỡng, dễ làm</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/dong-y-chua-mong-tinh-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Top 7 bài thuốc Đông y chữa mộng tinh chuẩn xác, hiệu quả</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/Cach-chua-mong-tinh-tai-nha-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">12+ cách chữa mộng tinh dân gian tại nhà, hiệu quả</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/thuoc-chua-benh-mong-tinh-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Top 20 Thuốc Chữa Mộng Tinh Chất Lượng, Giá Tốt (2023)</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 nam-khoa-row-right ">
                    <ul>
                        <li><a href="#">Tôi đã chữa khỏi bệnh suy giảm ham muốn bằng Uy Long Đại Bổ như thế nào?</a></li>
                        <li><a href="#">Uy Long Đại Bổ: Bài thuốc cung đình chữa rối loạn cương dương được cam kết hiệu quả</a></li>
                        <li><a href="#">Bài thuốc rượu ngâm Uy Long Đại Bổ Tửu giúp anh em “nhạy” trong chuyện ấy</a></li>
                        <li><a href="#">Review bài thuốc Uy Long Đại Bổ Tửu có tốt không?</a></li>
                        <li class="item-list-bottom"><a href="#">Không Bị Yếu Sinh Lý Có Sử Dụng Uy Long Đại Bổ Tửu Được Không?</a></li>
                    </ul>
                </div>
            </div>
            <div class="nam-khoa-new-title">
                <p class="title"><a href="#">RỐI LOẠN CƯƠNG DƯƠNG</a></p>
                <ul>
                    <li class="list-item-bottom"><a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="row nam-khoa-row nam-khoa-row-second">
                <div class="col-12 col-md-4">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/stud-100-dai-dien-335x250.jpg" alt=""></a>
                    <p ><a class="item-title" href="#">Stud 100 Chính Hãng Dùng Thế Nào Tốt? Cách Nhận Biết Hàng Thật Giả</a></p>
                    <p class="item-description">Thuốc xịt Stud 100 là sản phẩm hỗ trợ ngừa chứng xuất tinh sớm cho…</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/bi-roi-loan-cuong-duong-co-sinh-con-duoc-khong-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Bị rối loạn cương dương có sinh con được không? Có vô sinh không?</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/roi-loan-cuong-duong-kieng-an-gi-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Rối loạn cương dương không nên ăn gì? Ăn gì để cương lâu, giúp quý…</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/chi-phi-dieu-tri-roi-loan-cuong-duong-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Chi phí điều trị rối loạn cương dương hết bao nhiêu tiền? Cách tiết kiệm…</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/bam-huyet-chua-roi-loan-cuong-duong-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Hướng dẫn chi tiết cách bấm huyệt chữa rối loạn cương dương giúp quý ông…</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 nam-khoa-row-right ">
                    <ul>
                        <li><a href="#">Điều trị rối loạn cương dương bằng sóng xung kích có thực sự hiệu quả?</a></li>
                        <li><a href="#">Thuốc Activ Gra điều trị rối loạn cương dương: Công dụng, cách dùng và giá bán</a></li>
                        <li><a href="#">[Tổng hợp] 10 bài tập điều trị rối loạn cương dương tại nhà hiệu quả chỉ sau vài phút</a></li>
                        <li><a href="#">Thuốc Levitra điều trị rối loạn cương dương và thông tin cơ bản</a></li>
                        <li class="item-list-bottom"><a href="#">Thuốc Tadalafil điều trị rối loạn cương dương có thực sự hiệu quả? Giá bao nhiêu?</a></li>
                    </ul>
                </div>
            </div>
            <div class="nam-khoa-new-title">
                <p class="title"><a href="#">XUẤT TINH SỚM</a></p>
                <ul>
                    <li class="list-item-bottom"><a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="row nam-khoa-row nam-khoa-row-second">
                <div class="col-12 col-md-4">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/dieu-tri-xuat-tinh-som-bang-thuoc-nam-tot-khong-382x250.jpg" alt=""></a>
                    <p ><a class="item-title" href="#">Điều trị xuất tinh sớm bằng thuốc nam: Top 12 bài thuốc giúp quý ông…</a></p>
                    <p class="item-description">Điều trị xuất tinh sớm bằng thuốc nam không hề xa lạ với người Việt.…</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/stud-100-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Stud 100 Chính Hãng Dùng Thế Nào Tốt? Cách Nhận Biết Hàng Thật Giả</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/thuoc-dong-y-chua-xuat-tinh-som-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Chữa Xuất Tinh Sớm Bằng Đông Y Giúp Nam Giới Bền Bỉ Cuộc “Yêu”</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/bao-cao-su-keo-dai-thoi-gian-dai-dien-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Dùng bao cao su kéo dài thời gian có tốt không? Top list các thương…</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/cach-keo-dai-thoi-gian-quan-he-cho-cap-doi-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">12 cách kéo dài thời gian quan hệ cho nam giới bị xuất tinh sớm </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 nam-khoa-row-right ">
                    <ul>
                        <li><a href="#">Chữa xuất tinh sớm bằng sóng cao tần có hiệu quả không? Thời gian điều trị bao lâu?</a></li>
                        <li><a href="#">Bao cao su Cá ngựa có tốt không? Thông tin các loại và giá bán</a></li>
                        <li><a href="#">7 cách chữa xuất tinh sớm bằng mật ong an toàn, hiệu quả</a></li>
                        <li><a href="#">Chữa xuất tinh sớm bệnh viện Bình Dân hiệu quả không? Chi phí thế nào?</a></li>
                        <li class="item-list-bottom"><a href="#">Bao cao su chống xuất tinh sớm Durex loại nào tốt nhất? Giá bao nhiêu?</a></li>
                    </ul>
                </div>
            </div>
            <div class="nam-khoa-new-title">
                <p class="title"><a href="#">YẾU SINH LÝ</a></p>
                <ul>
                    <li class="list-item-bottom"><a href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="row nam-khoa-row nam-khoa-row-second">
                <div class="col-12 col-md-4">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/thuoc-tang-cuong-sinh-ly-nam-cua-uc-376x250.jpg" alt=""></a>
                    <p ><a class="item-title" href="#">Top 6 thuốc tăng cường sinh lý nam của Úc được tin dùng nhiều nhất</a></p>
                    <p class="item-description">Thuốc tăng cường sinh lý nam của Úc đã có mặt tại thị trường Việt…</p>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/thuc-pham-tang-cuong-sinh-ly-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Top 20 thực phẩm tăng cường sinh lý nam giúp trở lại thời “mãnh hổ”</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/thuoc-cuong-duong-cua-duc-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">10 loại thuốc cường dương của Đức được dùng phổ biến</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/qua-sung-chua-yeu-sinh-ly-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-8 col-md-8 item-title">
                            <p><a class="item-title" href="#">Quả sung chữa yếu sinh lý – giải pháp đơn giản, hiệu quả cao</a></p>
                        </div>
                    </div>
                    <div class="row nam-khoa-item">
                        <div class="col-4 col-md-4 item-img">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/nam-khoa/thuoc-uong-lam-giam-sinh-ly-dan-ong-255x155.jpg" alt=""></a>
                        </div>
                        <div class="col-md-8 item-title">
                            <p><a class="item-title" href="#">Thuốc uống làm giảm sinh lý đàn ông – Chuyên gia khuyên dùng gì? </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 nam-khoa-row-right ">
                    <ul>
                        <li><a href="#">Chuyên gia đánh giá về cách trị xuất tinh sớm, yếu sinh lý bằng mẹo và gợi ý giải pháp</a></li>
                        <li><a href="#">Tôi đã chữa khỏi bệnh suy giảm ham muốn bằng Uy Long Đại Bổ như thế nào?</a></li>
                        <li><a href="#">Yếu sinh lý nặng cỡ nào cũng khỏi nếu bạn biết đến bí mật này sớm hơn</a></li>
                        <li><a href="#">Chỉ sau 2 tháng tôi đã thoát khỏi ám ảnh yếu sinh lý với cách đơn giản không ngờ đến</a></li>
                        <li class="item-list-bottom"><a href="#">Một ngày uống 2 lần, sau 3 tháng tôi đã lấy lại được bản lĩnh đàn ông nhờ bài thuốc Uy Long Đại Bổ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>