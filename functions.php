<?php
//サムネイルの有効化
add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  //メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション'
  ]);
});

//アイキャッチ画像がなければ、デフォルト
function get_eyeCatch_with_default()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else :
    $img = array(get_template_directory_uri() . '/img/top.jpg');
  endif;
  return $img;
}

//サイドバー
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side-title">',
    'after_title' => '</h3>'
  ));
}
