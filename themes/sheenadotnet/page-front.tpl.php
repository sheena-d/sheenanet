<?php
?>
<header>
<h1 id="site-name"><span class="name"><?php print $site_name; ?></span><?php print $site_slogan; ?></h1>
</header>
<div id="main" role="main">
   <?php print render($page['content']); ?> 
</div>
<footer>

</footer>