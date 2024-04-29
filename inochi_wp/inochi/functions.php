<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function custom_excerpt_length( $length ) {
    return 70;
}

add_filter( 'excerpt_length', 'custom_excerpt_length' );

function new_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

function theme_custom_setup() {
    add_theme_support( 'post-thumbnails' ); 
}

add_action( 'after_setup_theme', 'theme_custom_setup' );

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action('customize_register', 'add_my_media_controls');
add_filter( 'show_admin_bar', '__return_false' );

remove_filter('the_content', 'wpautop');

add_filter('query_vars', function($vars) {
    $vars[] = 'category_id';
    return $vars;
});


function enqueue_particle_js() {
    wp_enqueue_script( 'particle-js', get_stylesheet_directory_uri() . '/assets/js/particle.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_particle_js' );


if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
      global $wp_query;
      $pager = 5; // need an unlikely integer
  
         echo paginate_links( array(
              'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages
         ) );
    }
 endif;


 //Email Confirm
 add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );
function custom_email_confirmation_validation_filter( $result, $tag ) {
    if ( 'your-email-confirm' == $tag->name ) {
        $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
        $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';
        if ( $your_email != $your_email_confirm ) {
            $result->invalidate( $tag, "メールアドレスが一致しません。" );
            return $result;
        }
    }
    return $result;
}
