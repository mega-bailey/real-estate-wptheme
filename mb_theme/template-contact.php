<?php 

/*
Template Name: Contact
*/

?>

<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
<h1><?php the_title(); ?></h1>

<div class="card mb-4">
    <div class="card-body align-items-center">


    <img src="http://192.168.64.2/mb_wp_starter/wp-content/uploads/2020/07/outdoors-3067868_1280.jpg" alt="Saint Lorem Agent" class="card-img-top img-fluid mb-4 mr-4">
   

    <div class="blog-content">

        <h4 ><?php the_title(); ?> </h4>
        <?php the_excerpt();?>
        <a href="<?php the_permalink();?>" class="btn btn-info">Read more</a>
        </div>
    </div>
</div>



<div class="row">

<div class="col-lg-8">
This is where the map goes alskjdfalsdjf</div>
<div class="col-lg-4">
This is where contact form goes
</div>

</div>

<?php get_template_part('includes/section', 'content'); ?>
</div>
</section>


<?php get_footer(); ?>