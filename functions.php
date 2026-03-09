<?php
function my_enqueue_styles() {
  //wp_enqueue_style( $handle, $src, $deps, $ver, $media );
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');

  //トップページなら
  if(is_home() || is_front_page()) {
    wp_enqueue_style('top', get_theme_file_uri('css/top.css'), array('ress', 'style'), false, 'all');

  //投稿詳細ページなら
  } elseif(is_single()) {
    wp_enqueue_style('single', get_theme_file_uri('css/single.css'), array('ress', 'style'), false, 'all');
  }
}
//wp_enqueue_scriptsが来たらmy_enqueue_stylesを実行する
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

//アイキャッチ機能を有効化
add_theme_support('post-thumbnails');