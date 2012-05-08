<?php

/**
 * @file
**/
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="inner gutter">
  <header>
  <?php print(preg_replace('/_/', ' ', $node->type));?>
  </header>
    <div class="content">
  <?php print(render($content)); ?>
  </div><!--/content-->
<footer>
<?php if(isset($content['field_external_link'])): ?>
<?php print(render($content['field_external_link'])); ?>
<?php endif; ?>
</footer>
  </div><!-- /inner -->
</article>
