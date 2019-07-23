<?php
/**
 * @file
 * base.features.inc
 */

/**
 * Implements hook_views_api().
 */
function base_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function base_image_default_styles() {
  $styles = array();

  // Exported image style: contact_photo.
  $styles['contact_photo'] = array(
    'label' => 'Contact photo',
    'effects' => array(
      5 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 300,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: gallery.
  $styles['gallery'] = array(
    'label' => 'gallery',
    'effects' => array(
      3 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 320,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
      4 => array(
        'name' => 'image_crop',
        'data' => array(
          'width' => 280,
          'height' => 200,
          'anchor' => 'center-center',
        ),
        'weight' => 2,
      ),
    ),
  );

  // Exported image style: page_item_gallery.
  $styles['page_item_gallery'] = array(
    'label' => 'page item gallery',
    'effects' => array(
      1 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 313,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
      2 => array(
        'name' => 'image_crop',
        'data' => array(
          'width' => 313,
          'height' => 200,
          'anchor' => 'center-center',
        ),
        'weight' => 2,
      ),
    ),
  );

  // Exported image style: sitewide.
  $styles['sitewide'] = array(
    'label' => 'sitewide',
    'effects' => array(
      6 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 1024,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function base_node_info() {
  $items = array(
    'contact' => array(
      'name' => t('Contact'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'garden' => array(
      'name' => t('Garden'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'page_item' => array(
      'name' => t('Page item'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'plant' => array(
      'name' => t('Plant'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'public_garden' => array(
      'name' => t('Public garden'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

/**
 * Implements hook_paragraphs_info().
 */
function base_paragraphs_info() {
  $items = array(
    'contact' => array(
      'name' => 'Contact',
      'bundle' => 'contact',
      'locked' => '1',
    ),
    'list_with_title' => array(
      'name' => 'List with title',
      'bundle' => 'list_with_title',
      'locked' => '1',
    ),
    'text' => array(
      'name' => 'text',
      'bundle' => 'text',
      'locked' => '1',
    ),
    'text_wide_image' => array(
      'name' => 'text wide image',
      'bundle' => 'text_wide_image',
      'locked' => '1',
    ),
  );
  return $items;
}
