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