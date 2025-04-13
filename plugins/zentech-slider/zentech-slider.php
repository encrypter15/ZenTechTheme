<?php
/**
 * Plugin Name: ZenTech Slider
 * Description: A simple carousel slider for ZenTechTheme.
 * Version: 1.0
 * Author: encrypter15
 * Author Email: encrypter15@gmail.com
 * License: MIT
 */

if (!defined('ABSPATH')) {
    exit;
}

// Enqueue Slider Assets
function zentech_slider_enqueue() {
    wp_enqueue_style('zentech-slider', plugins_url('assets/css/slider.css', __FILE__), array(), '1.0');
    wp_enqueue_script('zentech-slider', plugins_url('assets/js/slider.js', __FILE__), array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'zentech_slider_enqueue');

// Slider Shortcode
function zentech_slider_shortcode() {
    ob_start();
    ?>
    <div class="zentech-slider">
        <div class="slider-track">
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio1.jpg" alt="Portfolio Project 1">
                <h3>Project Alpha</h3>
            </div>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio2.jpg" alt="Portfolio Project 2">
                <h3>Project Beta</h3>
            </div>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio3.jpg" alt="Portfolio Project 3">
                <h3>Project Gamma</h3>
            </div>
        </div>
        <button class="slider-prev">Prev</button>
        <button class="slider-next">Next</button>
        <div class="slider-dots"></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('zentech_slider', 'zentech_slider_shortcode');

// Admin Settings Page
function zentech_slider_settings_page() {
    add_options_page(
        'ZenTech Slider Settings',
        'ZenTech Slider',
        'manage_options',
        'zentech-slider',
        'zentech_slider_settings_render'
    );
}
add_action('admin_menu', 'zentech_slider_settings_page');

function zentech_slider_settings_render() {
    ?>
    <div class="wrap">
        <h1>ZenTech Slider Settings</h1>
        <p>Customize slider settings here. For advanced customization, edit the plugin code.</p>
        <form method="post" action="options.php">
            <?php
            settings_fields('zentech_slider_settings');
            do_settings_sections('zentech_slider_settings');
            ?>
            <p><label><input type="checkbox" name="zentech_slider_autoplay" <?php checked(get_option('zentech_slider_autoplay', 1)); ?>> Enable Autoplay</label></p>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

function zentech_slider_settings_init() {
    register_setting('zentech_slider_settings', 'zentech_slider_autoplay');
}
add_action('admin_init', 'zentech_slider_settings_init');
