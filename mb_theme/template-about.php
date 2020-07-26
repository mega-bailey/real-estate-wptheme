<?php 

/*
Template Name: About
*/

?>

<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
<h1 class="mb-4"><?php the_title(); ?></h1>

<div class="row">
    <div class="container">
    <?php get_template_part('includes/section', 'content'); ?>

    </div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="card mb-4">
    <div class="card-body align-items-center">


    <img src="http://192.168.64.2/mb_wp_starter/wp-content/uploads/2020/07/outdoors-3067868_1280.jpg" alt="Saint Lorem Agent" class="card-img-top img-fluid mb-4 mr-4">
   

    <div class="blog-content">

        <h4><?php the_title(); ?> </h4>
        <?php the_excerpt();?>
        <a href="<?php the_permalink();?>" class="btn btn-info">Read more</a>
        </div>
    </div>
</div>

</div>
<div class="col-lg-6">
<div class="card mb-4">
    <div class="card-body align-items-center">


    <img src="http://192.168.64.2/mb_wp_starter/wp-content/uploads/2020/07/businessman-481113_1280.jpg" alt="Saint Lorem Agent" class="card-img-top img-fluid mb-4 mr-4">
   

    <div class="blog-content">
        <h4 ><?php the_title(); ?> </h4>
        <?php the_excerpt();?>
        <a href="<?php the_permalink();?>" class="btn btn-info">Read more</a>
        </div>
    </div>
</div>

</div>
</div>

</div>
</section>


<?php get_footer(); ?>