<?php 

class Category_Page_Benh extends WP_Widget {
	/**
	 * Thiết lập widget: đặt tên, base ID
	 */
	function __construct() {
		parent::__construct (
			'get_category_benh', // id của widget
			'Get Category Page', // tên của widget
			array(
				'description' => 'Mô tả của widget' // mô tả
			)
		  );

	}
	/**
	 * Tạo form option cho widget
	 */
	function form( $instance ) {
		parent::form( $instance );
		//Biến tạo các giá trị mặc định trong form
		$default = array(
			'title' => 'Tiêu đề widget'
		);


		//Gộp các giá trị trong mảng $default vào biến $instance để nó trở thành các giá trị mặc định
		$instance = wp_parse_args( (array) $instance, $default);


		//Tạo biến riêng cho giá trị mặc định trong mảng $default
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
			'id'           => 'categories_dropdown',
			'value_field'  => 'id',
			'name'         => $this->get_field_name('select_cate'),
			'selected'     => $select_cate,
		);
		
		$select = wp_dropdown_categories( $args );
		echo '<div>
			Style <select name="'.$this->get_field_name('select_style').'">
			<option '.selected( $select_style ,0 ,false).' value="0">---choose option--</option>
			<option '.selected( $select_style ,1 ,false).' value="1" >Style 1</option>
			<option '.selected( $select_style ,2 ,false).' value="2" >Style 2</option>
			<option '.selected( $select_style ,3 ,false).' value="3" >Style 3</option>
			<option '.selected( $select_style ,4 ,false).' value="4" >Style 4</option>
		</select>
		</div>
		';


	}
	/**
	 * save widget form
	 */
	function update( $new_instance, $old_instance ) {
		parent::update( $new_instance, $old_instance );


		$instance = $old_instance;
		$instance['select_cate'] = strip_tags($new_instance['select_cate']);
		$instance['select_style'] = strip_tags($new_instance['select_style']);
		return $instance;
	}
	/**
	 * Show widget
	 */


	function widget( $args, $instance ) {
		extract( $args );
		$select_cate = apply_filters( 'widget_title', $instance['select_cate'] );
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
			'posts_per_page' => 10,
			'post_status'   => 'publish' ,
			'orderby' => 'date',
		);
		$the_query = new WP_Query( $args );

		if($select_style == 1){
			if ( $the_query->have_posts() ) :
			?>
				<section class="category-benh">
					<div class="container">
                    <div class="new-title">
						<h3 class="title"><a href="<?php echo esc_attr( esc_url( get_category_link( $select_cate ) ) ); ?>"><?php echo get_cat_name($select_cate);?></a></h3>
						<ul  class="list-cat-child" >
							<?php echo $html;?>
							<li class="item-cat-child list-item-bottom"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="row">
								<?php 
									$i = 0;
									while ( $the_query->have_posts() ) : $the_query->the_post();
									if($i <= 3):
								?>
									<div class="col-12 col-md-6">
                                        <div class="post">
                                            <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                                                </h3>
                                            </div>
                                        </div>
									</div>
								<?php 
										endif;
										$i++;
									endwhile;
								?>
							</div>
						</div>
						<div class="col-12 col-md-6 category-sidebar">
							<?php 
								$i = 0;
								while ( $the_query->have_posts() ) : $the_query->the_post();
								if($i == 4):
							?>
                            <div class="post post-small">
                                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-small-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                                <div class="post-content">
                                    <h3 class="post-small-title">
                                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                                    </h3>
                                    <p class="post-description"><?php echo get_the_content( 'Read more ...' ); ?></p>
                                </div>
                            </div>
							<ul class="list-new-post">
								<?php 
									elseif($i > 4 ):
								?>
									<?php if($i != 9): ?>
                                    <li class="new-item-list"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></li>
									<?php else : ?>
                                    <li class="new-item-list new-item-list-nonebottom"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>">Tiêu ban Giải độc thang chữa mề đay có thực sự hiệu quả?</a></li>
								<?php 
											endif;
										endif;
										$i++;
									endwhile;
								?>
							</ul>
							
						</div>
					</div>
				</section>
			<?php
			endif;
		}
		if($select_style == 2){
			if ( $the_query->have_posts() ) :
			?>
				<section class="category-benh">
					<div class="container">
						<div class="new-title">
							<h3 class="title"><a href="<?php echo esc_attr( esc_url( get_category_link( $select_cate ) ) ); ?>"><?php echo get_cat_name($select_cate) ?></a></h3>
							<ul  class="list-cat-child" >
								<?php echo $html; ?>
								<li class="item-cat-child list-item-bottom"><a class="item-link" href="#">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<?php
							$i = 0;
							while ( $the_query->have_posts() ) : $the_query->the_post();
							if($i == 0): 
						?>
							<div class="row">
								<div class="col-12 col-md-4">
                                    <div class="post">
                                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                                            </h3>
                                            <p class="post-description"><?php echo get_the_content( 'Read more ...' ); ?></p>
                                        </div>
                                    </div>
								</div>
								<div class="col-12 col-md-4">
						<?php 
							elseif($i > 0 && $i <= 3 ):
						?>
                            <div class="post post-small">
                                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-small-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                                <div class="post-content">
                                    <h3 class="post-small-title">
                                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                            </div>
						<?php
							elseif($i == 4 ):
						?>
							<div class="post post-small">
                                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-small-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                                <div class="post-content">
                                    <h3 class="post-small-title">
                                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                            </div>
							</div>
							<div class="col-12 col-md-4">
                            <ul class="list-new-post">
						<?php
							elseif($i > 4) :
						?>
							<?php if($i != 9): ?>
								<li  class="new-item-list"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></li>
							<?php else : ?>
								<li class="new-item-list new-item-list-nonebottom"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></li>
								</ul>
							</div>
						<?php
								endif;
							endif;
							$i++;
						endwhile;
						?>
					</div>
				</section>

			<?php
			endif;
		}
		if($select_style == 3){
			if ( $the_query->have_posts() ) :
			?>
				<section class="category-benh">
					<div class="container">
						<div class="new-title">
							<h3 class="title"><a href="<?php echo esc_attr( esc_url( get_category_link( $select_cate ) ) ); ?>"><?php echo get_cat_name($select_cate) ?></a></h3>
							<ul  class="list-cat-child" >
								<?php echo $html; ?>
								<li class="item-cat-child list-item-bottom"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
			<?php
				$i = 0;
				while ( $the_query->have_posts() ) : $the_query->the_post();
					if($i == 0): 
			?>
				<div class="row">
					<div class="col-12 col-md-5 ">
                        <div class="post">
                            <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                                </h3>
                                <p class="post-description"><?php echo get_the_content( 'Read more ...' ); ?></p>
                            </div>
                        </div>
					</div>
			<?php
					elseif($i == 1): 
			?>
				<div class="col-12 col-md-7 category-sidebar">
                    <div class="post post-small">
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-small-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                        <div class="post-content">
                            <h3 class="post-small-title">
                                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                            </h3>
                            <p class="post-description"><?php echo get_the_content( 'Read more ...' ); ?></p>
                        </div>
                    </div>
					<ul class="list-new-post">
			<?php
				elseif($i < 7):
			?>
				<?php if($i != 6): ?>
					<li class="new-item-list"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></li>
				<?php else : ?>
					<li class="new-item-list new-item-list-nonebottom"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></li>
			<?php
						endif;
					endif;
					$i++;
				endwhile;
				?>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<?php
			endif;
		}
		if($select_style == 4){
			if ( $the_query->have_posts() ) :
			?>
				<section class="category-benh">
					<div class="container">
						<div class="new-title">
							<h3 class="title"><a href="<?php echo esc_attr( esc_url( get_category_link( $select_cate ) ) ); ?>"><?php echo get_cat_name($select_cate) ?></a></h3>
							<ul  class="list-cat-child" >
								<?php echo $html; ?>
								<li class="item-cat-child list-item-bottom"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>">Xem tất cả <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="row category-footer">
			<?php
				$i = 0;
				while ( $the_query->have_posts() ) : $the_query->the_post();
				if($i < 6):
			?>
				<div class="col-6 col-md-4">
                    <div class="post post-small">
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-small-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft' ) ); ?></a>
                        <div class="post-content">
                            <h5 class="item-new-title"><a class="item-link" href="<?php echo get_permalink(get_the_ID()); ?>">SUY GIẢM HAM MUỐN</a></h5>
                            <h3 class="post-small-title">
                                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
			<?php
						endif;
					$i++;
				endwhile;
			?>
						</div>
					</div>
				</section>
			<?php
			endif;
		}
		// Kết thúc nội dung trong widget


		echo $after_widget;

	}


}