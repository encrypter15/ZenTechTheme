<?php
/**
 * ZenTechTheme Functions
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 1.0
 */

// Theme Setup
function zentech_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'zentech')
    ));
}
add_action('after_setup_theme', 'zentech_theme_setup');

// Enqueue Scripts and Styles
function zentech_enqueue_scripts() {
    wp_enqueue_style('zentech-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_script('zentech-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'zentech_enqueue_scripts');

// Google Analytics
function zentech_google_analytics() {
    $ga_id = ''; // Set your Google Analytics ID here, e.g., 'G-XXXXXXXXXX'
    if (!empty($ga_id)) {
        ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr($ga_id); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo esc_attr($ga_id); ?>');
        </script>
        <?php
    }
}
add_action('wp_head', 'zentech_google_analytics');

// Custom Menu for One-Page
function zentech_default_menu() {
    echo '<ul>';
    echo '<li><a href="#hero" class="active">Home</a></li>';
    echo '<li><a href="#about">About</a></li>';
    echo '<li><a href="#services">Services</a></li>';
    echo '<li><a href="#portfolio">Portfolio</a></li>';
    echo '<li><a href="#pricing">Pricing</a></li>';
    echo '<li><a href="#testimonials">Testimonials</a></li>';
    echo '<li><a href="#contact">Contact</a></li>';
    echo '</ul>';
}
