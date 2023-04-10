<?php 
class Get_Post_By_Category extends WP_Widget {
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function __construct() {
		parent::__construct (
			'get_post_by_category', // id của widget
			'Get Post By Category', // tên của widget
			array(
				'description' => 'lấy bài viết theo danh mục' // mô tả
			)
		  );

	}
	/**
	 * Tạo form option cho widget
	 */
	function form( $instance ) {
		parent::form( $instance );
		//Biến tạo các giá trị mặc định trong form
		// $default = array(
		// 	'title' => 'Tiêu đề widget'
		// );


		//Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
		$instance = wp_parse_args( (array) $instance, $instance['title']);


		//Tạo biến riêng cho giá trị mặc định trong mảng $default
		$title = $instance['title'];
		$number_post = $instance['number_post'];
		$select_cate = $instance['select_cate'] ;
		$select_style = $instance['select_style'] ;

		//Hiển thị form trong option của widget
		$args = array(
			'taxonomy'     => 'category',
			'hide_empty'   => false,
			'echo'         => true,
			'hierarchical' => true,
			'show_count'   => false,
			'orderby'      => 'parent',
			'id'           => $this->get_field_name('select_cate'),
			'value_field'  => 'id',
			'name'         => $this->get_field_name('select_cate'),
			'selected'     => $select_cate,
		);
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Tiêu đề:', 'creattheme' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'select_cate' ) ); ?>"><?php esc_attr_e( 'Chọn Danh Mục:', 'creattheme' ); ?></label>	
			<br>
			<?php $select = wp_dropdown_categories( $args ); ?>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number_post' ) ); ?>"><?php esc_attr_e( 'Số bài hiển thị:', 'creattheme' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_post' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_post' ) ); ?>" type="text" value="<?php echo esc_attr( $number_post ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'select_style' ) ); ?>"><?php esc_attr_e( 'Chọn Style:', 'creattheme' ); ?></label>
			<br>	
			<select name="<?php echo $this->get_field_name('select_style'); ?>">
				<option <?php echo selected( $select_style ,0 ,false); ?> value="0">---choose option--</option>
				<option <?php echo selected( $select_style ,1 ,false); ?> value="1" >Category Style 1</option>
				<option <?php echo selected( $select_style ,2 ,false); ?> value="2" >Category Style 2</option>
				<option <?php echo selected( $select_style ,3 ,false); ?> value="3" >Category Style 3</option>
			</select>
		<p>

		<?php
		echo '
		';


	}
	/**
	 * save widget form
	 */
	function update( $new_instance, $old_instance ) {
		parent::update( $new_instance, $old_instance );


		$instance = $old_instance;
		$instance['select_cate'] = strip_tags($new_instance['select_cate']);
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number_post'] = strip_tags($new_instance['number_post']);
		$instance['select_style'] = strip_tags($new_instance['select_style']);
		return $instance;
	}
	/**
	 * Show widget
	 */


	function widget( $args, $instance ) {
		extract( $args );
		$select_cate = apply_filters( 'widget_title', $instance['select_cate'] );
		$number_post = apply_filters( 'widget_title', $instance['number_post'] );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$select_style = apply_filters( 'widget_title', $instance['select_style'] );
		$args = array(
			'hide_empty'               => 0,
			'parent'                   => $select_cate,
			'taxonomy'                 => 'category',
		);
		$get_children_array = get_categories($args);
		$html = '';
		foreach ($get_children_array as $key => $value) {
			$html .= '<li class="item-cat-child" ><a class="item-link" href="'.esc_attr( esc_url( get_page_link( $value->term_id ) ) ) .'">'.$value->name.'</a></li>';
		}

		$args = array(
			'post_type'  => 'post',
			'cat'        => $select_cate,
			'posts_per_page' => $number_post,
			'post_status'   => 'publish' ,
			'orderby' => 'date',
			'order' => 'DESC',
		);
		$the_query = new WP_Query( $args );
		$args['query'] = $the_query;
		$args['instance'] = $instance;
		$args['html'] = $html;
		if ( $the_query->have_posts() ) :
			get_template_part( 'blocks/category', 'style-'.$select_style,$args);
		endif;
		// Kết thúc nội dung trong widget


		echo $after_widget;

	}


}
add_action( 'widgets_init', function(){
	register_widget('Get_Post_By_Category');
});
class Home_Get_Post_By_Category extends WP_Widget {
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function __construct() {
		parent::__construct (
			'home_get_post_by_category', // id của widget
			'Home Get Post By Category', // tên của widget
			array(
				'description' => 'lấy bài viết theo danh mục' // mô tả
			)
		  );

	}
	/**
	 * Tạo form option cho widget
	 */
	function form( $instance ) {
		parent::form( $instance );
		//Biến tạo các giá trị mặc định trong form
		// $default = array(
		// 	'title' => 'Tiêu đề widget'
		// );


		//Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
		$instance = wp_parse_args( (array) $instance, $instance['title']);


		//Tạo biến riêng cho giá trị mặc định trong mảng $default
		$title = $instance['title'];
		$number_post = $instance['number_post'];
		$select_cate = $instance['select_cate'] ;
		$select_style = $instance['select_style'] ;

		//Hiển thị form trong option của widget
		$args = array(
			'taxonomy'     => 'category',
			'hide_empty'   => false,
			'echo'         => true,
			'hierarchical' => true,
			'show_count'   => false,
			'orderby'      => 'parent',
			'id'           => $this->get_field_name('select_cate'),
			'value_field'  => 'id',
			'name'         => $this->get_field_name('select_cate'),
			'selected'     => $select_cate,
		);
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Tiêu đề:', 'creattheme' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'select_cate' ) ); ?>"><?php esc_attr_e( 'Chọn Danh Mục:', 'creattheme' ); ?></label>	
			<br>
			<?php $select = wp_dropdown_categories( $args ); ?>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number_post' ) ); ?>"><?php esc_attr_e( 'Số bài hiển thị:', 'creattheme' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number_post' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number_post' ) ); ?>" type="text" value="<?php echo esc_attr( $number_post ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'select_style' ) ); ?>"><?php esc_attr_e( 'Chọn Style:', 'creattheme' ); ?></label>
			<br>	
			<select name="<?php echo $this->get_field_name('select_style'); ?>">
				<option <?php echo selected( $select_style ,0 ,false); ?> value="0">---choose option--</option>
				<option <?php echo selected( $select_style ,1 ,false); ?> value="1" > Style 1</option>
				<option <?php echo selected( $select_style ,2 ,false); ?> value="2" > Style 2</option>
				<option <?php echo selected( $select_style ,3 ,false); ?> value="3" > Style 3</option>
			</select>
		<p>

		<?php
		echo '
		';


	}
	/**
	 * save widget form
	 */
	function update( $new_instance, $old_instance ) {
		parent::update( $new_instance, $old_instance );
		$instance = $old_instance;
		$instance['select_cate'] = strip_tags($new_instance['select_cate']);
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number_post'] = strip_tags($new_instance['number_post']);
		$instance['select_style'] = strip_tags($new_instance['select_style']);
		return $instance;
	}
	/**
	 * Show widget
	 */


	function widget( $args, $instance ) {
		extract( $args );
		$select_cate = apply_filters( 'widget_title', $instance['select_cate'] );
		$number_post = apply_filters( 'widget_title', $instance['number_post'] );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$select_style = apply_filters( 'widget_title', $instance['select_style'] );
		$args = array(
			'hide_empty'               => 0,
			'parent'                   => $select_cate,
			'taxonomy'                 => 'category',
		);
		$get_children_array = get_categories($args);
		$html = '';
		foreach ($get_children_array as $key => $value) {
			$html .= '<li class="item-cat-child" ><a class="item-link" href="'.esc_attr( esc_url( get_page_link( $value->term_id ) ) ) .'">'.$value->name.'</a></li>';
		}

		$args = array(
			'post_type'  => 'post',
			'cat'        => $select_cate,
			'posts_per_page' => $number_post,
			'post_status'   => 'publish' ,
			'orderby' => 'date',
			'order' => 'DESC',
		);
		$the_query = new WP_Query( $args );
		$args['query'] = $the_query;
		$args['instance'] = $instance;
		$args['html'] = $html;
		if ( $the_query->have_posts() ) :
			get_template_part( 'blocks/home', 'style-'.$select_style,$args);
		endif;
		// Kết thúc nội dung trong widget


		echo $after_widget;

	}


}
add_action( 'widgets_init', function(){
	register_widget('Home_Get_Post_By_Category');
});
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
add_action( 'widgets_init', function(){
	register_widget('Footer_List_Link');
});