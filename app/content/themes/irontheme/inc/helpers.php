<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Debug function print_r
 *
 * @param mixed $var
 * @param boolean $die
 */
function pr( $var, $die = true ) {
  echo '<pre>';
  print_r( $var );
  echo '</pre>';
  if ( $die ) {
    die();
  }
}

/**
 * Debug function var_dump
 *
 * @param mixed $var
 * @param boolean $die
 */
function vd( $var, $die = true ) {
  echo '<pre>';
  var_dump( $var );
  echo '</pre>';
  if ( $die ) {
    die();
  }
}

/**
 * SVG Sprite Icon
 */
function ith_the_icon($icon_name, $icon_class = false) {
  $html = '<svg class="'. $icon_class .'"><use xlink:href="'. THEME_URL .'/images/svg/symbol/sprite.svg#'. $icon_name .'"></use></svg>';
  echo $html;
}

function ith_get_icon($icon_name, $icon_class = false) {
  $html = '<svg class="'. $icon_class .'"><use xlink:href="'. THEME_URL .'/images/svg/symbol/sprite.svg#'. $icon_name .'"></use></svg>';
  return $html;
}