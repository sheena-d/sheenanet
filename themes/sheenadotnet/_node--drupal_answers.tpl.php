<?php

/**
 * @file
**/

?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="inner gutter">
  <footer>
  <?php print($node->type);?>
  </footer>
     <?php
     $url = trim(render($content['field_external_link']));
     $linkTitle = trim(render($content['field_description']));
     $options = array(
     'attributes' => array(
     'title' => $title,
     'rel' => 'nofollow',
     'target' => '_blank',
     ),
     'html' => FALSE,
     'external' => TRUE,
     );
     print(l($linkTitle, $url, $options));
     ?>
  </div><!-- /inner -->
</article>
