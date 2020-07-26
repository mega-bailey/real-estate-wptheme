
<footer>
    <div class="container">
    <div class="logo-container">
    <h3 class="logo display-font">Saint Lorem</h3>
    <hr class="logo-hr">
    <h5 class="logo-secondary">Real Estate</h5>
    </div>
   
    <?php wp_nav_menu(
        array(
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-bar'
        )); 
    ?>
    </div>
    </footer>


<?php wp_footer(); ?>
</body>
</html>
