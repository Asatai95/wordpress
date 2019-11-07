<?php

// logを確認するため用のコード
if(!function_exists('_log')){

  function _log($message) {
    if (WP_DEBUG === true) {

      if (is_array($message) || is_object($message)) {

        error_log(print_r($message, true));

      } else {

        error_log($message);

      }

    }

  }
}


function ajax_get_new_posts() {
  $mes = $_POST['mes'];
  $returnObj = array();

  $args = array(
      'post_type' => 'post',
      'posts_per_page' => 4,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_status' => 'publish',
      'category_name' => $mes,
  );

  $posts  = new WP_Query( $args );
  if ($posts->have_posts()) {
      while($posts->have_posts()) {
          $posts->the_post();
          $returnObj[] = array(
              'post_title' => get_the_title(),
              'permalink' => get_permalink(),
              'thumbnail' => get_the_post_thumbnail_url(),
              'excerpt' => get_the_excerpt(),
          );
      }
  }
  $cnt = count($returnObj);
  _log("cnt");
  _log($cnt);
  if ($cnt > 4) {
    $return = array_merge($returnObj,array('flag'=>'True'));
  } else {
    $return = array_merge($returnObj,array('flag'=>'False'));
  }
  wp_reset_postdata();

  echo json_encode( $return );
  die();
}
add_action( 'wp_ajax_ajax_get_new_posts', 'ajax_get_new_posts' );


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

// function delete_domain_from_attachment_url( $url ) {
//     if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
//         $url = $match[2];
//     }
//     return $url;
// }

// add_filter( 'wp_get_attachment_url', 'delete_domain_from_attachment_url' );

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

  function cldnry_wp_generate_attachment_metadata($metadata, $postid){
      $imgPath = get_attached_file( $postid );
      //ファイル形式のチェック
      $info = pathinfo($imgPath);
      $public_id = $info["filename"];
      $mime_types = array("png"=>"image/png", "jpg"=>"image/jpeg", "pdf"=>"application/pdf", "gif"=>"image/gif", "bmp"=>"image/bmp");
      $extension = $info["extension"];

      $type = @$mime_types[$extension];
      //画像以外はcloudinaryにアップしない
      if($type === null){
          $stderr = fopen( 'php://stderr', 'w' );
          fwrite( $stderr, 'アップロードされたファイルが画像ではありません。file-type:'.$extension );
          return $metadata;
      }

      //Cloudinaryへアップ
      // $cl_upload = new CloudinaryUploader();
      $cl_upload = \Cloudinary\Uploader::upload($imgPath);
      $public_id = $cl_upload['public_id'];

      //DBへ保存
      update_attached_file($postid, $cl_upload['secure_url']);
      $metadata['cloudinary'] = true; //cloudinaryからアップしたことを記録

      return $metadata;
  }
  add_filter( "wp_generate_attachment_metadata" , "cldnry_wp_generate_attachment_metadata", 10, 2 );

?>