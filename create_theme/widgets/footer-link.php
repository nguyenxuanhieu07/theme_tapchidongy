<?php 
class Footer_List_Link extends WP_Widget {
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function __construct() {
		parent::__construct (
			'footer_list_link', // id của widget
			'Footer list link', // tên của widget
			array(
				'description' => 'Mô tả của widget' // mô tả
			)
		  );

	}


	/**
	 * Show widget
	 */


	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );


		// echo $before_widget;


		//In tiêu đề widget
		// echo $before_title.$title.$after_title;


		// Nội dung trong widget


		echo '<section class="footer-list-category">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <p>TAI – MŨI – HỌNG</p>
                    <ul class="footer-list-item">
                        <li class="item-list"><a class="item-link" href="#">Viêm amidan</a></li>
                        <li class="item-list"><a href="#" class="item-link">Viêm họng</a></li>
                        <li class="item-list"><a href="#" class="item-link">Viêm xoang</a></li>
                        <li class="item-list"><a href="#" class="item-link">Bệnh ho</a></li>
                        <li class="item-list"><a href="#" class="item-link">Viêm phế quản</a></li>
                        <li class="item-list"><a href="#" class="item-link"> Viêm mũi dị ứng</a></li>
                        <li class="item-list"><a href="#" class="item-link">Viêm tai giữa</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <p>DA LIỄU</p>
                    <ul class="footer-list-item">
                        <li class="item-list"><a href="#" class="item-link">Viêm da cơ địa</a></li>
                        <li class="item-list"><a href="#" class="item-link">Vảy nến</a></li>
                        <li class="item-list"><a href="#" class="item-link">Á sừng</a></li>
                        <li class="item-list"><a href="#" class="item-link">Viêm da tiết bã</a></li>
                        <li class="item-list"><a href="#" class="item-link">Da nhiễm corticoid</a></li>
                        <li class="item-list"><a href="#" class="item-link">Tổ đỉa</a></li>
                        <li class="item-list"><a href="#" class="item-link">Da khô</a></li>
                        <li class="item-list"><a href="#" class="item-link">Da dầu</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <p>NAM KHOA</p>
                    <ul class="footer-list-item">
                        <li class="item-list"><a href="#" class="item-link">Yếu sinh lý</a></li>
                        <li class="item-list"><a href="#" class="item-link">Xuất tinh sớm</a></li>
                        <li class="item-list"><a href="#" class="item-link">Rối loạn cương dương</a></li>
                        <li class="item-list"><a href="#" class="item-link">Liệt dương</a></li>
                        <li class="item-list"><a href="#" class="item-link">Tinh trùng yếu</a></li>
                        <li class="item-list"><a href="#" class="item-link">Di tinh</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <p>TIÊU HÓA</p>
                    <ul class="footer-list-item">
                        <li class="item-list"><a href="#" class="item-link">Đau dạ dày</a></li>
                        <li class="item-list"><a href="#" class="item-link">Trào ngược dạ dày</a></li>
                        <li class="item-list"><a href="#" class="item-link">Viêm đại tràng</a></li>
                        <li class="item-list"><a href="#" class="item-link">Viêm dạ dày</a></li>
                        <li class="item-list"><a href="#" class="item-link">Vi khuẩn HP</a></li>
                        <li class="item-list"><a href="#" class="item-link">Viêm hang vị</a></li>
                        <li class="item-list"><a href="#" class="item-link">Ợ hơi</a></li>
                        <li class="item-list"><a href="#" class="item-link">Xuất huyết dạ dày</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                    <p>XƯƠNG KHỚP</p>
                    <ul class="footer-list-item">
                        <li class="item-list"><a href="#" class="item-link">Thoát vị đĩa đệm</a></li>
                        <li class="item-list"><a href="#" class="item-link">Đau dây thần kinh liên sườn</a></li>
                        <li class="item-list"><a href="#" class="item-link">Khô khớp</a></li>
                        <li class="item-list"><a href="#" class="item-link">Loãng xương</a></li>
                        <li class="item-list"><a href="#" class="item-link">Đau vai gáy</a></li>
                        <li class="item-list"><a href="#" class="item-link">Thoái hoá cột sống</a></li>
                        <li class="item-list"><a href="#" class="item-link">Đau nhức xương khớp</a></li>
                        <li class="item-list"><a href="#" class="item-link">Đau cổ</a></li>
                        <li class="item-list"><a href="#" class="item-link">Đau lưng</a></li>
                        <li class="item-list"><a href="#" class="item-link">Gout</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <p>RỐI LOẠN NỘI TIẾT</p>
                    <ul class="footer-list-item">
                        <li class="item-list"><a href="#" class="item-link">Nội tiết tố nữ</a></li>
                        <li class="item-list"><a href="#" class="item-link">Khô âm đạo</a></li>
                        <li class="item-list"><a href="#" class="item-link">Mãn kinh</a></li>
                        <li class="item-list"><a href="#" class="item-link">Tiền mãn kinh</a></li>
                        <li class="item-list"><a href="#" class="item-link">Suy giảm ham muốn</a></li>
                        <li class="item-list"><a href="#" class="item-link">Lãnh cảm</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <p>NHA KHOA</p>
                    <ul>
                        <li class="item-list"><a href="#" class="item-link">Trồng răng Implant có đau không</a></li>
                        <li class="item-list"><a href="#" class="item-link">Quy trình trồng răng sứ</a></li>
                        <li class="item-list"><a href="#" class="item-link">Ưu nhược điểm bọc răng sứ</a></li>
                        <li class="item-list"><a href="#" class="item-link">Có nên bọc răng sứ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>';


		// Kết thúc nội dung trong widget


		echo $after_widget;

	}


}