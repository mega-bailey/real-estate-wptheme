
<footer>

        <div class="container d-block d-md-flex">
        <div class="pb-4">
        <?php get_search_form();?>
        </div>

        <div>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-bar'
        )); 
    ?>
    </div>
    </div>
  
    
    </footer>


<?php wp_footer(); ?>
</body>
</html>
