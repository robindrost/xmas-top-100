<?php // $Id: block.tpl.php,v 1.1 2009/10/10 19:16:31 divisivecottonwood Exp $ ?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">
<?php if ($block->subject): ?>
  <p class="block-title"><?php print $block->subject ?></p>
<?php endif;?>

  <div class="content">
    <?php print $block->content ?>
  </div>
</div>