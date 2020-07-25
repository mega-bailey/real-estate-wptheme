<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saint Lorem Real Estate</title>

<?php wp_head(); ?>
    
</head>
<body>
    
    <header>
    <div class="container">
        <div class="logo-container">
    <h3 class="logo display-font">Saint Lorem</h3>
    <hr class="logo-hr">
    <h5 class="logo-secondary">Real Estate</h5>
    </div>
    <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar'
        )); 
    ?>
    </div>
    </header>


