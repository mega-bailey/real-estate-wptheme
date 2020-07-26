<?php get_header(); ?>
hello there

<div class="jumbotron ">
    <div class="container">
    <div class="jumbotron-overlay shadow">
  <h1 class="display-4 weight700 mb-0">Saint Lorem</h1>
  <hr class="jumbotron-hr">
  <h2 class=" weight200 ">Real Estate</h2>
  <p class="lead mb-5">Professional real estate services tailored to your personal needs.</p>
  <a class="btn btn-orange btn-lg shadow" href="#" role="button">View Our Listings</a>
</div>
</div>
</div>
<section class="page-wrap">


<div class="container">
    
<h1>Welcome to Saint Lorem </h1>

<?php get_template_part('includes/section', 'content'); ?>
<?php get_template_part('includes/section', 'featured'); ?>

<?php get_search_form();?>

</div>
</section>


<?php get_footer(); ?>