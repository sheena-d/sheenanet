<?php

function sheenadotnet_preprocess_page(&$vars){

  if($vars['is_front']) {
    drupal_add_js(drupal_get_path('theme', 'sheenadotnet').'/js/jquery.masonry.min.js');
    drupal_add_js(drupal_get_path('theme', 'sheenadotnet').'/js/jquery.infinitescroll.min.js');
    drupal_add_js(drupal_get_path('theme', 'sheenadotnet').'/js/sheenadotnet-front-script.js');
  }

}

function sheenadotnet_preprocess_field(&$vars){
  
  }

function sheenadotnet_preprocess_node(&$vars){
  unset($vars['content']['links']);
  
  switch($vars['type']) {
  
  case('drupal_answers'):  
    
  break;
  
  }
}