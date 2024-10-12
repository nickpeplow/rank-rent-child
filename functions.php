<?php
// Include compatibility functions
require_once get_stylesheet_directory() . '/multisite.php';

// Include field functions
require_once get_stylesheet_directory() . '/functions-fields.php';


// Rest of your child theme functions...

function custom_fields_test() {
    add_action('admin_notices', function() {
        echo '<div class="notice notice-success"><p>Custom Fields Manager is loaded!</p></div>';
    });
}
add_action('admin_init', 'custom_fields_test');