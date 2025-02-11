<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_styles');
function enqueue_child_styles() {
    wp_enqueue_style( 'events-style', get_stylesheet_directory_uri() . '/style.css' );
}
























add_action('init', function() {
    add_theme_support('acf-blocks');
});

// functions.php
add_action('init', function() {
    register_block_pattern_category('custom-patterns', [
        'label' => __('Custom Patterns', 'events-manager')
    ]);

    register_block_pattern('events-manager/custom-content', [
        'title' => __('Custom Content', 'events-manager'),
        'categories' => ['custom-patterns'],
        'content' => '<!-- wp:group -->
                     <div class="wp-block-group">
                         <!-- wp:html -->
                         <?php
                         if (function_exists("get_field")) {
                             get_template_part("template-parts/content", "custom");
                         }
                         ?>
                         <!-- /wp:html -->
                     </div>
                     <!-- /wp:group -->'
    ]);
});

