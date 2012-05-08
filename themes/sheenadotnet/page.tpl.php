<?php
?>
<header id="site-header">
<?php if($site_name || $site_slogan):?><h2 id="site-name"><?php if($site_name):?><span class="name"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></span><?php endif;?><?php print $site_slogan; ?></h2><?php endif; ?>
</header>
<div id="main" role="main">
  <?php print $messages; ?>
  <?php print render($tabs); ?>
   <?php print render($page['content']); ?> 
</div>
<footer id="site-footer">

</footer id="site-footer">