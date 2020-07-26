
<footer>

        <div class="container d-block d-md-flex">

        
    <!-- <div class="logo-container">
    <h3 class="logo display-font">Saint Lorem</h3>
    <hr class="logo-hr">
    <h5 class="logo-secondary">Real Estate</h5>
    </div> -->
   
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
