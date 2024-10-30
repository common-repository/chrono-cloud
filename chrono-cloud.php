<?php
/*
Plugin Name: Chrono Cloud
Plugin URI: http://www.mfd-consult.dk/chrono-cloud/
Description: A function providing a tag cloud like view of monthly archives.
Author: Morten Høybye Frederiksen
Version: 1.1
Author URI: http://mortenhf.dk/
*/

function chrono_cloud_echo() {
  $tags = array();
  $arcs = wp_get_archives('type=monthly&show_post_count=1&echo=0');
  if (preg_match_all('|<li><a href=(.)(.+?)\\1( title=(.)(.+?)\\3)?>(.+?)</a>&nbsp;\((\d+)\)</li>|i', $arcs, $links, PREG_SET_ORDER)) {
    foreach ($links as $link) {
      $tag = (object) array();
      $tag->link = $link[2];
      $tag->name = str_replace(' ', '&nbsp;', ucfirst($link[6]));
      $tag->count = $link[7];
      $tags[] = $tag;
    }
    function chrono_cloud_sort($tags) { uasort( $tags, create_function('$a, $b', 'return ($a->link > $b->link);') ); return $tags; };
    add_filter('tag_cloud_sort', 'chrono_cloud_sort');
    echo wp_generate_tag_cloud($tags, 'smallest=100&largest=300&unit=%&number=999');
    remove_filter('tag_cloud_sort', 'chrono_cloud_sort');
  } else
    echo $arcs;
}

// EOF
