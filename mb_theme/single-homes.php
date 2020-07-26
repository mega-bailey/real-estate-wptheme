<?php get_header(); ?>

<section class="page-wrap">
<div class="container">

    <div class="row">
        <div class="col-lg-6">
            <h2>$<?php the_field("price"); ?> </h2>
            <h5><?php the_title(); ?> </h5>
            <p class="mb-5 font-weight-bold"><?php the_field('bd'); ?> bd 
            <span class="text-muted font-weight-lighter">|</span> 
            <?php the_field('ba'); ?> ba 
            <span class="text-muted font-weight-lighter">|</span> 
            <?php the_field('sqft'); ?> sqft </p>
        </div>
        <div class="col-lg-6">
           <ul class="custom-fields">
               <li><span class="font-weight-bold">Type:</span> <?php the_field("type");?></li>
               <li><span class="font-weight-bold">Year Built:</span> <?php the_field("year_built");?></li>
               <li><span class="font-weight-bold">Price/sqft:</span> $<?php the_field("pricesqft");?></li>
               
           </ul>
        </div>
    </div>    

    <div class="row mb-6">
        <div class="col-lg-6">
        <!-- Home Content -->
        <?php if( have_posts() ): while( have_posts()): the_post();?>
            <?php the_content();?>
            <p >Listed for sale on <?php echo get_the_date('d/m/Y h:i:s');?></p>
            <?php endwhile; else: endif; ?>
        </div>
        <div class="col-lg-5">
        <?php get_template_part('includes/form', 'house'); ?>
        </div>
    </div>       
</div>
</section>



<?php get_footer(); ?>