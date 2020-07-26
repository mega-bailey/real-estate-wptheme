<!-- individual blog archive item-->
<?php if( have_posts() ): while( have_posts()): the_post();?>

<div class="card mb-5" style="max-width: 900px;">
  <div class="row ">
    <div class="col-md-4 d-flex align-items-center justify-content-center">
    <?php if(has_post_thumbnail()):?>
      <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="p-4 img-fluid d-block" alt="<?php the_title();?>">
      <?php endif;?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>
        <p class="card-text"><?php the_excerpt();?></p>
        <a href="<?php the_permalink();?>" class="btn btn-info">Read more</a>
      </div>
    </div>
  </div>
</div>

<!-- <div class="card mb-4">
    <div class="card-body d-flex flex-sm-column flex-md-row flex-lg-row">
    <?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mr-4">
    <?php endif;?>

        <div class="blog-content">
        <h4 ><?php the_title(); ?> </h4>
        <?php the_excerpt();?>
        <a href="<?php the_permalink();?>" class="btn btn-info">Read more</a>
        </div>
    </div>
</div> -->



<?php endwhile; else: endif; ?>