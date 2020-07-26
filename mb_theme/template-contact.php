<?php 

/*
Template Name: Contact
*/

?>

<?php get_header(); ?>
<section class="page-wrap">
<div class="container">


    <section class="row">
        <div class="col-lg-10">
        <h1 class="mb-4"><?php the_title(); ?></h1>
    <?php get_template_part('includes/section', 'content'); ?>

        </div>

        <div class="col-lg-2">
        <?php if(is_active_sidebar('blog-sidebar')):?>
        <?php dynamic_sidebar('blog-sidebar');?>
        <?php endif;?>   
        </div>


    </section>
    <div class="col-lg-6">
    <?php get_template_part('includes/form', 'enquiry'); ?>
    </div>

</div>
</section>


<?php get_footer(); ?>



