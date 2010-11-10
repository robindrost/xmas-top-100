<?php // $Id: node.tpl.php,v 1.3 2009/11/25 17:50:13 divisivecottonwood Exp $ ?>



<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clear-block">

<?php print $picture ?>

<?php if (!$page): ?>
  <span class="node-title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></span>
<?php endif; ?>

  <div class="meta">
  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <?php if ($terms): ?>
    <div class="terms terms-inline"><?php print $terms ?></div>
  <?php endif;?>
  </div>

  <div class="content">
    <?php print $content ?>
    

<?php if($teaser){ ?>
     <!--  Adds the extra read more link -->
     
      <?php     if($node->readmore == TRUE) {
   // adds read more link as image to the bottom of the teaser content
   ?>
    
  <?php  print "<a href='/" . $node->links["node_read_more"]["href"] . "' class='readmore' title='" . $node->links["node_read_more"]["attributes"]["title"] . "..' >" .  'Read more...' . "</a>"; ?>
  
<?php

}
}

?>
    
  </div>
<div class="bottom-links">
  <?php print $links; ?>
</div></div>