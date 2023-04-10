<?php
$args = array(
    'post_type'  => 'post',
    'post_status'   => 'publish' ,
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 9,
    'meta_query' => array(
        array(
            'key' => 'featured-post-homepage',
            'value' => 1,
            'compare' => '=',
        )
    )

);
$the_query = new WP_Query( $args );

$i = 0;
?>
<section class="home-post">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
<?php
    while ( $the_query->have_posts() ) : $the_query->the_post();
        if($i <= 1):
?>
    <div class="post">
        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-thumnail"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
        <div class="post-content">
            <h3 class="post-title">
                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
            </h3>
        </div>
    </div>
<?php
    elseif($i == 2):
?>
     </div>
        <div class="col-md-6">
            <div class="post">
                <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-thumnail-big"><?php  the_post_thumbnail( get_the_ID(), 'thumbnail', array( 'class' => 'alignleft post-img' ) ); ?></a>
                <div class="post-content">
                    <h3 class="post-title-big">
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="post-link"><?php the_title(); ?></a>
                    </h3>
                </div>
                <p class="post-description"><?php echo get_the_content( 'Read more ...' ); ?></p>
            </div>
        </div>
        <div class="col-md-3">
<?php 
    elseif($i > 2 && $i < 8 ):
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
    endif;
    $i++;
endwhile;
?>
            </div>
        </div>
    </div>
</section>