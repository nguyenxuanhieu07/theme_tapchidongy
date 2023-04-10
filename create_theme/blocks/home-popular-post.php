<?php
$args = array(
    'post_type'  => 'post',
    'post_status'   => 'publish' ,
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 8,
    'meta_query' => array(
        array(
            'key' => 'popular-post-homepage',
            'value' => 1,
            'compare' => '=',
        )
    )

);

$the_query = new WP_Query( $args );

?>
 <section class="home-post-lore">
    <div class="container">
        <a class="home-post-title" href="#">Kiến Thức Bệnh</a>
        <div class="row">
        <?php  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-3">
                <div class="post">
                    <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                    <div class="post-content">
                    <h3 class="post-title-big">
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                    </h3>
                </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
</section>