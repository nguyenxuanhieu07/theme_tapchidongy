<?php 
$the_query = $args['query'];
$select_cate = $args['instance']['select_cate'];
$title = $args['instance']['title'];
$html = $args['html'];
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