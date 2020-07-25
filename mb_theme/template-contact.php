<?php 

/*
Template Name: Contact
*/

?>

<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
<h1><?php the_title(); ?> </h1>


<div class="row">

<div class="col-lg-8">
This is where the map goes</div>
<div class="col-lg-4">
This is where contact form goes
</div>

</div>

<?php get_template_part('includes/section', 'content'); ?>
</div>
></section>


<?php get_footer(); ?>