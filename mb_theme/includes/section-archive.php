<!-- individual blog archive item-->
<?php if( have_posts() ): while( have_posts()): the_post();?>

<div class="card p-3 mb-5" style="max-width: 900px;">
  <div class="row ">
    <div class="col-md-5 d-flex justify-content-center align-items-center">
    <?php if(has_post_thumbnail()):?>
      <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid" alt="<?php the_title();?>">
      <?php endif;?>
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>
        <p class="card-text"><?php the_excerpt();?></p>
        <a href="<?php the_permalink();?>" class="btn btn-info">Read more</a>
      </div>
    </div>
  </div>
</div>




<?php endwhile; else: endif; ?>