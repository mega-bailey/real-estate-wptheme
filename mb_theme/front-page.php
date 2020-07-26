<?php get_header(); ?>

<div class="jumbotron ">
    <div class="container">
    <div class="jumbotron-overlay shadow">
  <!-- <h1 class="display-4 weight700 mb-0">Saint Lorem</h1>
  <hr class="jumbotron-hr">
  <h2 class=" weight200 ">Real Estate</h2> -->
  <p class="lead mb-5">Professional real estate services tailored to your personal needs.</p>
  <a class="btn btn-orange btn-lg shadow" href="<?php echo site_url('/homes'); ?>" role="button">View Our Listings</a>
</div>
</div>
</div>
<section class="page-wrap">


<div class="container mb-5">
    
<h1 class="mb-4">Welcome to Saint Lorem </h1>

<?php get_template_part('includes/section', 'content'); ?>



<a class="btn btn-orange btn-lg shadow mt-4 mr-2" href="<?php echo site_url('/homes'); ?>" role="button">View Our Listings</a>
<a class="btn btn-orange btn-lg shadow mt-4" href="<?php echo site_url('/category/blog'); ?>" role="button">View Our Blog</a>


</div>
</section>


<?php get_footer(); ?>