<?php get_header(); ?>


        

<section class="page-wrap">
<div class="container">
    <section class="row">
    <div class="col-lg-10">
    
<h1 class="mb-4">Apologies</h1>
<p>It looks like we sent you down a wrong path, let's get you back to our home page.</p>
<a class="btn btn-info" href="<?php echo site_url("/"); ?>" role="button">Home</a>
</div>
<div class="col-lg-2">
        <?php if(is_active_sidebar("blog-sidebar")):?>
        <?php dynamic_sidebar("blog-sidebar");?>
        <?php endif;?>   
        </div>


</section>



</div>
</section>

<div class="container mb-5">
<div class="col-lg-8">
<img src="http://192.168.64.2/mb_wp_starter/wp-content/uploads/2020/07/jamie-street-_94HLr_QXo8-unsplash-scaled.jpg" alt="Saint Lorem Agent" class="card-img-top img-fluid mb-4 mr-4">
</div>
</div>


</div>
</section>


<?php get_footer(); ?>


