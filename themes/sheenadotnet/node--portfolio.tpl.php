<?php

/**
 * @file
**/
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="inner gutter">
  <footer class="overlay">
  <?php if(isset($content['field_external_link'])): ?>
  <?php print(l(t('view details'), 'node/'.$node->nid)); ?>
  <?php print(render($content['field_external_link'])); ?>
  <?php else: ?>
  <?php print(l(t('view details'), 'node/'.$node->nid)); ?>
  <?php endif; ?>
  </footer>
  <header>
  <?php print(preg_replace('/_/', ' ', $node->type));?>
  </header>
    <div class="content">
  <?php print(render($content)); ?>
  </div><!--/content-->
  </div><!-- /inner -->
</article>
