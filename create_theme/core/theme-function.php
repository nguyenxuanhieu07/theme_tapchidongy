<?php 

/**
 * Tạo class Thachpham_Widget
 */
function tapchidongy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Link', 'createtheme' ),
			'id'            => 'foodter-link',
			'description'   => esc_html__( 'Add widgets here.', 'createtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s footer-list-category">',
			'after_widget'  => '</section>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Get Post Category Parent', 'createtheme' ),
			'id'            => 'category-parent',
			'description'   => esc_html__( 'Add widgets here.', 'createtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Get Post Category Child', 'createtheme' ),
			'id'            => 'category-child',
			'description'   => esc_html__( 'Add widgets here.', 'createtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Homepage middle Post', 'createtheme' ),
			'id'            => 'homepage-middle-post',
			'description'   => esc_html__( 'Add widgets here.', 'createtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Homepage left Post', 'createtheme' ),
			'id'            => 'homepage-left-post',
			'description'   => esc_html__( 'Add widgets here.', 'createtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
		)
	);
}
add_action( 'widgets_init', 'tapchidongy_widgets_init' );


define( 'TCDY_DIR', get_template_directory() . '/core/extension/meta-box/' );
define( 'TCDY_URL', get_template_directory_uri() . '/core/extension/meta-box/' );
require_once TCDY_DIR . 'meta-box.php';
require_once TCDY_DIR . 'extensions/mb-settings-page/mb-settings-page.php';
require_once TCDY_DIR . 'extensions/meta-box-group/meta-box-group.php';

require get_template_directory() . '/core/modules/widgets/widget-init.php';
require get_template_directory() . '/core/extension/bootstrap_navwalker.php';
require_once get_template_directory() . '/core/modules/post/post-meta-box.php';

add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

function addTitleFieldToCat(){
	$id = $_POST['tag_ID'] ? $_POST['tag_ID'] : $_GET['tag_ID'];
    $cat_title = get_term_meta($id, 'cate_style', true);
    ?> 
    <tr class="form-field">
        <th scope="row" valign="top"><label for="cat_page_title"><?php _e('Styles Category'); ?></label></th>
        <td>
        	<select name="cate_style">
				<option <?php echo selected($cat_title,0,false); ?> value="0">Default</option>
				<option <?php echo selected($cat_title,1,false); ?> value="1">Style 1</option>
				<option <?php echo selected($cat_title,2,false); ?> value="2">Style 2</option>
			</select>
			<br />
        </td>
		<br />
    </tr>
    <?php

}
add_action ( 'category_edit_form_fields', 'addTitleFieldToCat');
add_action ( 'category_add_form_fields', 'addTitleFieldToCat');

function wecode_save_category_fields($term_id) {
	$term_keywords = $_REQUEST['cate_style'] ? $_REQUEST['cate_style'] : 0;
	update_term_meta( $term_id, 'cate_style', $term_keywords );
}
//Enable saving custom field in the edit screen
add_action('edited_category', 'wecode_save_category_fields', 10, 2);

//Enable saving custom field in the add screen
add_action('create_category', 'wecode_save_category_fields', 10, 2);


add_filter( 'wp_dropdown_cats', 'wp_dropdown_cats_multiple', 10, 2 );

// function wp_dropdown_cats_multiple( $output, $r ) {

//     if( isset( $r['multiple'] ) && $r['multiple'] ) {

//          $output = preg_replace( '/^<select/i', '<select multiple', $output );

//         $output = str_replace( "name='{$r['name']}'", "name='{$r['name']}[]'", $output );

//         foreach ( array_map( 'trim', explode( ",", $r['selected'] ) ) as $value )
//             $output = str_replace( "value=\"{$value}\"", "value=\"{$value}\" selected", $output );

//     }

//     return $output;
// }