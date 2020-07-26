<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

    <!-- <?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-4 ">
    <?php endif;?> -->



    <div class="row">
        <div class="col-lg-8">
        <h2>$<?php the_field("price"); ?> </h2>
        <h5><?php the_title(); ?> </h5>
        <p class="mb-5 font-weight-bold"><?php the_field('bd'); ?> bd 
        <span class="text-muted font-weight-lighter">|</span> 
        <?php the_field('ba'); ?> ba 
        <span class="text-muted font-weight-lighter">|</span> 
        <?php the_field('sqft'); ?> sqft </p>

        <!-- Home Content -->
<?php if( have_posts() ): while( have_posts()): the_post();?>
<?php the_content();?>
<button class="btn btn-info mt-3 mb-4">Contact Agent</button>

<p class="mb-5">Listed for sale on <?php echo get_the_date('d/m/Y h:i:s');?></p>
<?php endwhile; else: endif; ?>


    
        <?php wp_link_pages(); ?>
        </div>

        <div class="col-lg-4">
           <ul class="custom-fields">
               <li><span class="font-weight-bold">Type:</span> <?php the_field("type");?></li>
               <li><span class="font-weight-bold">Year Built:</span> <?php the_field("year_built");?></li>
               <li><span class="font-weight-bold">Price/sqft:</span> $<?php the_field("pricesqft");?></li>
               
           </ul>
        </div>
    

    </div>
    
        

    </div>
</section>


<?php get_footer(); ?>