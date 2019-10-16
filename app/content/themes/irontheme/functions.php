<?php
/**
 * Theme setup
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Helpers functions
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * ACF
 */
if ( class_exists( 'acf' ) ) {
  require get_template_directory() . '/inc/acf.php';
}

/**
 * Customs Post Type
 */
require get_template_directory() . '/inc/custom-post-type.php';