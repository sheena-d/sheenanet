<?php

function sheenadotnet_preprocess_page(&$vars){
  drupal_add_js('http://use.typekit.com/iyk3kkc.js', array('type'=>'external', 'preprocess'=>false, 'group'=>'JS_LIBRARY', 'weight'=>-19));

  if($vars['is_front']) {
    drupal_add_js(drupal_get_path('theme', 'sheenadotnet').'/js/jquery.masonry.min.js', array('group'=>'JS_LIBRARY'));
    drupal_add_js(drupal_get_path('theme', 'sheenadotnet').'/js/jquery.infinitescroll.min.js', array('group'=>'JS_LIBRARY'));
    drupal_add_js(drupal_get_path('theme', 'sheenadotnet').'/js/sheenadotnet-front-script.js');
  }else{
    drupal_add_js('try{Typekit.load();}catch(e){}', array('type'=>'inline', 'preprocess'=>false, 'group'=>'JS_LIBRARY', 'weight'=>-19));
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