<?php
/**
 * Plugin Name: My First Plugin
 * Author: Tsuyoshi Maeda
 * Author URI: https://tsuyopon.xyz/
 * Plugin URI: https://tsuyopon.xyz/
 * Description: 練習です
 * Version: 1.0.0
 */


add_filter('the_content', 'insert_db_to_the_content');
function insert_db_to_the_content($content) {
  $html = '<div class="my_ad_space_style">ここにバナー広告</div>';
  return $html . $content;
}

add_action('wp_head', 'my_ad_space_style');
function my_ad_space_style() {
  echo '<style>.my_ad_space_style{ margin: 1em 0; }</style>';
}