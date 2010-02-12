<?php

/**
 * Implementation of hook_content_default_fields().
 */
function blog_advanced_content_default_fields() {
  module_load_include('inc', 'blog_advanced', 'blog_advanced.defaults');
  $args = func_get_args();
  return call_user_func_array('_blog_advanced_content_default_fields', $args);
}

/**
 * Implementation of hook_ctools_plugin_api().
 */
function blog_advanced_ctools_plugin_api() {
  module_load_include('inc', 'blog_advanced', 'blog_advanced.defaults');
  $args = func_get_args();
  return call_user_func_array('_blog_advanced_ctools_plugin_api', $args);
}

/**
 * Implementation of hook_node_info().
 */
function blog_advanced_node_info() {
  module_load_include('inc', 'blog_advanced', 'blog_advanced.features.node');
  $args = func_get_args();
  return call_user_func_array('_blog_advanced_node_info', $args);
}

/**
 * Implementation of hook_default_page_manager_pages().
 */
function blog_advanced_default_page_manager_pages() {
  module_load_include('inc', 'blog_advanced', 'blog_advanced.defaults');
  $args = func_get_args();
  return call_user_func_array('_blog_advanced_default_page_manager_pages', $args);
}

/**
 * Implementation of hook_views_default_views().
 */
function blog_advanced_views_default_views() {
  module_load_include('inc', 'blog_advanced', 'blog_advanced.features.views');
  $args = func_get_args();
  return call_user_func_array('_blog_advanced_views_default_views', $args);
}
