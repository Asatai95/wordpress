<?php

add_theme_support('menus');

register_sidebar(
    array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    )
);

 show_admin_bar( false );
 add_theme_support('post-thumbnails');

function delete_domain_from_attachment_url( $url ) {
    if ( preg_match( '/^https?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
        $url = $match[2];
    }
    return $url;
}

add_filter( 'wp_get_attachment_url', 'delete_domain_from_attachment_url' );

function twpp_enqueue_scripts() {
    wp_enqueue_script(
      'main-script',
      get_template_directory_uri() . '/main.js'
    );
  }

  add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );

function if_pc($atts, $content = null ) {
  $content = do_shortcode( $content);
    if(!wp_is_mobile()) {
      return $content;
    }
  }
  add_shortcode('pc', 'if_pc');
  function if_sp($atts, $content = null ) {
    $content = do_shortcode( $content);
    if(wp_is_mobile()) {
        return $content;
    }
  }
  add_shortcode('sp', 'if_sp');
?>