<!-- blog archive page -->
<?php get_header(); ?>

<section class="page-wrap">
<div class="container">
<section class="row">
        <div class="col-lg-10">

<h1 class="mb-4"><?php echo single_cat_title(); ?></h1>


<?php get_template_part('includes/section', 'archive'); ?>

<!-- <?php global $wp_query; 
$big = 99999999999; 
echo paginate_links(array(
'base' => str_replace($big, '%#%', esc_url( get_pagenum_link($big))),
'format' => '?paged=%#%',
'current' => max(1, get_query_var('paged')),
'total' => $wp_query->max_num_pages
));
?> -->

<?php previous_posts_link(); ?>

<?php next_posts_link(); ?>
</div>



<div class="col-lg-2">
        <?php if(is_active_sidebar('blog-sidebar')):?>
        <?php dynamic_sidebar('blog-sidebar');?>
        <?php endif;?>   
        </div>


</section>

</div>
</section>


<?php get_footer(); ?>