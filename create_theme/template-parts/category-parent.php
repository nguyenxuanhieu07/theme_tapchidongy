<?php 
    $category = $args['infor'];
 ?>
    <div class="container benh-title text-center">
        <h1><?php echo $category->name; ?></h1>
        <hr>
    </div>

<?php dynamic_sidebar('content-benh') ?>
