<?php 
    $category = $args['infor'];
 ?>
    <div class="container category-title text-center">
        <h1><?php echo $category->name; ?></h1>
        <hr>
    </div>

<?php dynamic_sidebar('category-parent') ?>
