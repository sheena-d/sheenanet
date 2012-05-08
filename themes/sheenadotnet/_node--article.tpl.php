<?php

/**
 * @file
**/

?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="inner gutter">
 <!-- <footer>
  <?php print($node->type);?>
  </footer>
     <?php
     $url = trim(render($content['field_link']));
     $linkTitle = render($content['field_article_title']);
     $options = array(
     'attributes' => array(
     'title' => $title,
     'rel' => 'follow',
     'target' => '_blank',
     ),
     'html' => TRUE,
     'external' => TRUE,
     );
     print(l($linkTitle, $url, $options));
     ?>-->
  </div><!-- /inner -->
</article>
