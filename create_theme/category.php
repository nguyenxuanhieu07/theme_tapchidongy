<?php 
    $category = get_queried_object();
    $args['infor'] = $category;
    get_header();
    $check_style = get_term_meta($category->term_id, 'cate_style', true);
    if($check_style == 1){
        get_template_part( 'template-parts/category', 'parent',$args);
    }elseif ($check_style == 2) {
        get_template_part( 'template-parts/category', 'child',$args);
    }else{
        get_template_part( 'template-parts/category', 'default',$args);
    }
 ?>
<?php get_footer(); ?>