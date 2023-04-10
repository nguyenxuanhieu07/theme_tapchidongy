<?php 
$the_query = $args['query'];
$select_cate = $args['instance']['select_cate'];
$title = $args['instance']['title'];
?>

<h5 class="category-title-cate"><span class="category-title-link"><a class="title-link" href="<?php echo esc_attr( esc_url( get_category_link( $select_cate ) ) ); ?>"><?php echo $title ? $title : get_cat_name($select_cate);?></a></span></h5> 

