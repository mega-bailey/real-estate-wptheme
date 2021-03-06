<?php if( have_posts() ): while( have_posts()): the_post();?>

<!-- <?php echo get_the_date('d/m/Y h:i:s');?> -->
<p class="mb-5"><?php echo get_the_date('l jS F, Y');?></p>

<?php the_content();?>

<!-- <?php the_author();?> -->
<!-- <?php
$firstname = get_the_author_meta('first_name'); 
$lastname = get_the_author_meta('last_name'); 
echo $firstname . ' ' . $lastname; 
?> -->
<p>Posted by <?php echo $firstname;?> <?php echo $lastname;?></p>


<?php 
$tags = get_the_tags();
if($tags):
foreach($tags as $tag):?>
<a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-info">
    <?php echo $tag->name;?>
</a>
<?php endforeach; endif; ?>



<?php 
$categories = get_the_category();
foreach($categories as $cat):?>
<a href="<?php echo get_category_link($cat->term_id);?>" class="badge badge-dark mb-5">
    <?php echo $cat->name;?>
</a>
<?php endforeach;?>


<?php comments_template();?>



<?php endwhile; else: endif; ?>