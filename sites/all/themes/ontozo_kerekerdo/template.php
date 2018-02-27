<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function ontozo_kerekerdo_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  ontozo_kerekerdo_preprocess_html($variables, $hook);
  ontozo_kerekerdo_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("html" in this case.)
 */

function ontozo_kerekerdo_preprocess_html(&$variables, $hook) {

  // Get front page items in order.
  $nqid = 1;
  $query = db_select('node', 'n')
    ->fields('n', array('nid'))
    ->condition('nn.sqid', $nqid);
  $query->join('nodequeue_nodes', 'nn', 'n.nid = nn.nid');

  $result = $query->execute();

  $menu_items = array();
  $paragraphs = array();
  foreach ($result as $nid) {
    $node = node_load($nid->nid);
    $paragraphs[strtolower(transliteration_get($node->title))] = $node;

    $anchor = str_replace(' ', '', strtolower(transliteration_get($node->title)));
    $menu_items[] = array(
      'anchor' => $anchor,
      'title' => $node->title,
    );

  }
  $menu_items[] = array('anchor' => 'galeria', 'title' => 'Galéria');
  $menu_items[] = array('anchor' => 'elerhetoseg', 'title' => 'Elérhetőség');


  $variables['menu_items'] = $menu_items;
  $variables['paragraphs'] = $paragraphs;

  // Contacts.
  $contacts = node_load(16);
  $contacts_wrapper = entity_metadata_wrapper('node', $contacts);
  for ($c = 0; $c < count($contacts_wrapper->field_contact); $c++ ) {
    //$item_id = $contacts_wrapper->field_contact[$c]->value()->item_id;
    //$entities = entity_load('paragraphs_item', array($item_id));
    //$contact_elements[] = entity_view('paragraphs_item', $entities, 'full');
    $contact_elements[] = $contacts_wrapper->field_contact[$c]->value();
  }

  $variables['contacts'] = $contact_elements;



  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  $variables['classes_array'] = array_diff($variables['classes_array'],
    array('class-to-remove')
  );
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function ontozo_kerekerdo_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function ontozo_kerekerdo_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--no-wrapper.tpl.php template for sidebars.
  if (strpos($variables['region'], 'sidebar_') === 0) {
    $variables['theme_hook_suggestions'] = array_diff(
      $variables['theme_hook_suggestions'], array('region__no_wrapper')
    );
  }
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function ontozo_kerekerdo_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  if ($variables['block_html_id'] == 'block-system-main') {
    $variables['theme_hook_suggestions'] = array_diff(
      $variables['theme_hook_suggestions'], array('block__no_wrapper')
    );
  }
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function ontozo_kerekerdo_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // ontozo_kerekerdo_preprocess_node_page() or ontozo_kerekerdo_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function ontozo_kerekerdo_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */
