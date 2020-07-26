
<footer>
    <div class="container">
    <div class="logo-container">
    <h3 class="logo display-font">Saint Lorem</h3>
    <hr class="logo-hr">
    <h5 class="logo-secondary">Real Estate</h5>
    </div>
    <div class="footer-location">
        
        <!-- <p class="footer-text">5424 Yakima Way</p>
        <p class="footer-text">Suite 105</p>
        <p class="footer-text">Chevy, WA 90555</p>
        <p class="footer-text">555.234.5678</p>
        <p class="footer-text">homes [@] saintlorem.com</p> -->
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
