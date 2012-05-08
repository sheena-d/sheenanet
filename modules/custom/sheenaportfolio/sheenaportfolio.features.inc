<?php
/**
 * @file
 * sheenaportfolio.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function sheenaportfolio_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function sheenaportfolio_node_info() {
  $items = array(
    'article' => array(
      'name' => t('Article'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Auto Title'),
      'help' => '',
    ),
    'drupal_answers' => array(
      'name' => t('Drupal Answers'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Auto Title'),
      'help' => '',
    ),
    'link' => array(
      'name' => t('Link'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Auto Title'),
      'help' => '',
    ),
    'portfolio' => array(
      'name' => t('Portfolio'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Auto Title'),
      'help' => '',
    ),
    'tweet' => array(
      'name' => t('Tweet'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Auto Title'),
      'help' => '',
    ),
  );
  return $items;
}
