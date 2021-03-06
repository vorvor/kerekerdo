<?php
/**
 * @file
 * base.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function base_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-dashboard.
  $menus['menu-dashboard'] = array(
    'menu_name' => 'menu-dashboard',
    'title' => 'Dashboard',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Dashboard');

  return $menus;
}
