<?php
/**
 * @file
 * photo_album.features.inc
 */

/**
 * Implements hook_views_api().
 */
function photo_album_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function photo_album_node_info() {
  $items = array(
    'photo_album' => array(
      'name' => t('Photo Album'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Album Title'),
      'help' => '',
    ),
  );
  return $items;
}
