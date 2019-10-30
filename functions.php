<?php
/**
 * Child Theme functions loads the main theme class and extra options
 *
 * @package Omega Child
 * @subpackage Child
 * @since 1.3
 *
 * @copyright (c) 2013 Oxygenna.com
 * @license http://wiki.envato.com/support/legal-terms/licensing-terms/
 * @version 1.0
 */

function oxy_load_child_scripts() {
    wp_enqueue_style( THEME_SHORT . '-child-theme' , get_stylesheet_directory_uri() . '/style.css', array( THEME_SHORT . '-theme' ), false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'oxy_load_child_scripts');

//enqueue javascript
function my_scripts_method() {
	wp_register_script('custom_script', get_stylesheet_directory_uri() . '/js/custom.js',   array('jquery'),   '1.0' );
	wp_enqueue_script('custom_script'); 
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

register_sidebar( array(
    'name' => __( 'Social Widget'),
    'id' => 'social-widget',
    'description' => __( '' ),
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'Footer Social'),
    'id' => 'footer-social',
    'description' => __( '' ),
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'Recent Posts'),
    'id' => 'recent-posts',
    'description' => __( '' ),
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

register_sidebar( array(
    'name' => __( 'For Great Grounds and Gardens'),
    'id' => 'grounds-gardens',
    'description' => __( '' ),
    'before_widget' => '',
    'after_widget' => "",
    'before_title' => '',
    'after_title' => '',
) );

// Transparent logo for case studies

function immedia_output_transparent_logo() {
    global $wp_query, $post;
    $is_blog = false;
    $transparent_logo_css = '';


    $logo_transparent = oxy_get_option('logo_image_trans');
    // check for page or blog page

        // if we are on the blog page make sure you use the blog page id for transparancy option
        $page_id = $is_blog ? get_option('page_for_posts') : $post->ID;

            $transparent_logo_css = '.transparent-header #masthead .navbar-brand {
                    background-image: url("' . $logo_transparent . '");
                }
                .transparent-header #masthead .navbar-brand img {
                    visibility: hidden;
                }
                .transparent-header #masthead.navbar-scrolled .navbar-brand {
                  background-image: none;
                }
                .transparent-header #masthead.navbar-scrolled .navbar-brand img {
                  visibility: visible;
                }';
   

?>
    <style type="text/css" media="screen">
        <?php echo $transparent_logo_css; ?>
    </style>
<?php

}