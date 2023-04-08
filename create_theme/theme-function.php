<?php 

/**
 * Tạo class Thachpham_Widget
 */




require get_template_directory() . '/widgets/footer-link.php';
require get_template_directory() . '/widgets/category-parent.php';
require get_template_directory() . '/extention/bootstrap_navwalker.php';

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