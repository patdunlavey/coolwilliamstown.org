<?php

/**
 * Override or insert variables into the html template.
 */
function blossom_preprocess_html(&$vars) {
  $theme_path = path_to_theme();
  // IE7+
  drupal_add_css($theme_path . '/css/ie/ie-all.css', array('group' => CSS_THEME, 'media' => 'screen, handheld, projection, tv', 'browsers' => array('IE' => 'IE', '!IE' => FALSE), 'preprocess' => FALSE,));
  drupal_add_css($theme_path . '/css/ie/ie-7.css', array('group' => CSS_THEME, 'media' => 'screen, handheld, projection, tv', 'browsers' => array('IE' => 'IE 7', '!IE' => FALSE), 'preprocess' => FALSE,));
  drupal_add_css($theme_path . '/css/ie/ie-8.css', array('group' => CSS_THEME, 'media' => 'screen, handheld, projection, tv', 'browsers' => array('IE' => 'IE 8', '!IE' => FALSE), 'preprocess' => FALSE,));
  drupal_add_css($theme_path . '/css/ie/ie-lte-8.css', array('group' => CSS_THEME, 'media' => 'screen, handheld, projection, tv', 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'preprocess' => FALSE,));
  drupal_add_css($theme_path . '/css/ie/ie-9.css', array('group' => CSS_THEME, 'media' => 'screen, handheld, projection, tv', 'browsers' => array('IE' => 'IE 9', '!IE' => FALSE), 'preprocess' => FALSE,));
}

?>