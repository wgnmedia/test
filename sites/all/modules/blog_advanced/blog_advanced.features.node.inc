<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _blog_advanced_node_info() {
  $items = array(
    'blog' => array(
      'name' => t('blog'),
      'module' => 'features',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '0',
      'body_label' => '',
      'min_word_count' => '0',
      'help' => '',
    ),
  );
  return $items;
}
