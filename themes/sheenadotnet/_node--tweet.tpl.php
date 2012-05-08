<?php

/**
 * @file
 */
?>
<!--<?php 
$text = str_replace('Catchatorie: ', '', render($content['field_description']));
if(strpos($text, 'RT') === 0){
  $classes .= ' retweet';
  }
$url = trim(render($content['field_link']));
$options = array(
'attributes' => array(
'title' => $text,
'rel' => 'nofollow',
'target' => '_blank',
),
'html' => TRUE,
'external' => TRUE,
);
?>-->

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="inner gutter">
<!--
     <footer>
     <?php print($node->type);?>
     </footer>
<?php print(l($text, $url, $options)); ?>-->
  </div><!-- /inner -->
</article>
