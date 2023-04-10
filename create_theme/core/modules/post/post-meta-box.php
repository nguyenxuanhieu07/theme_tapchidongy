<?php
add_filter( 'rwmb_meta_boxes', 'tapchidongy_register_post_meta_boxes' );
function tapchidongy_register_post_meta_boxes( $meta_boxes ) {
	$prefix = 'field_prefix_';
	$meta_boxes[] = array(
		'id'         => 'custom-post-meta',
		'title'      => 'Tùy chọn Nâng cao',
		'post_types' => 'post',
		'context'    => 'side',
		'priority'   => 'high',
		'fields' => array(
			array(
				'name' => 'Bài nổi bật (Hiển thị đầu trang chủ)',
				'id'   => 'featured-post-homepage',
				'type' => 'checkbox',
			),
			array(
				'name' => 'Bài Kiến Thức Bệnh(Hiển thị đầu trang chủ)',
				'id'   => 'popular-post-homepage',
				'type' => 'checkbox',
			),
		)
	);
	return $meta_boxes;
}
