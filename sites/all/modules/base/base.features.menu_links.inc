<?php
/**
 * @file
 * base.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function base_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-dashboard_add-new-garden:node/add/garden.
  $menu_links['menu-dashboard_add-new-garden:node/add/garden'] = array(
    'menu_name' => 'menu-dashboard',
    'link_path' => 'node/add/garden',
    'router_path' => 'node/add/garden',
    'link_title' => 'Add new Garden',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-dashboard_add-new-garden:node/add/garden',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: menu-dashboard_add-new-page-item:node/add/page-item.
  $menu_links['menu-dashboard_add-new-page-item:node/add/page-item'] = array(
    'menu_name' => 'menu-dashboard',
    'link_path' => 'node/add/page-item',
    'router_path' => 'node/add/page-item',
    'link_title' => 'Add new Page item',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-dashboard_add-new-page-item:node/add/page-item',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: menu-dashboard_logout-dashboard:user/logout.
  $menu_links['menu-dashboard_logout-dashboard:user/logout'] = array(
    'menu_name' => 'menu-dashboard',
    'link_path' => 'user/logout',
    'router_path' => 'user/logout',
    'link_title' => 'Logout dashboard',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-dashboard_logout-dashboard:user/logout',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: menu-dashboard_manage-contact-info:node/16/edit.
  $menu_links['menu-dashboard_manage-contact-info:node/16/edit'] = array(
    'menu_name' => 'menu-dashboard',
    'link_path' => 'node/16/edit',
    'router_path' => 'node/%/edit',
    'link_title' => 'Manage Contact info',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-dashboard_manage-contact-info:node/16/edit',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -49,
    'customized' => 1,
  );
  // Exported menu link: menu-dashboard_manage-plants-gallery:node/15/edit.
  $menu_links['menu-dashboard_manage-plants-gallery:node/15/edit'] = array(
    'menu_name' => 'menu-dashboard',
    'link_path' => 'node/15/edit',
    'router_path' => 'node/%/edit',
    'link_title' => 'Manage plants gallery',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'menu-dashboard_manage-plants-gallery:node/15/edit',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -50,
    'customized' => 1,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Add new Garden');
  t('Add new Page item');
  t('Logout dashboard');
  t('Manage Contact info');
  t('Manage plants gallery');

  return $menu_links;
}
