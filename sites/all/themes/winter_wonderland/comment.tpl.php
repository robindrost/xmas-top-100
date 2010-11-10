<?php // $Id: comment.tpl.php,v 1.1 2009/10/10 19:16:31 divisivecottonwood Exp $ ?>
<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status ?> clear-block">
  <?php print $picture ?>

  <?php if ($comment->new): ?>
    <span class="new"><?php print $new ?></span>
  <?php endif; ?>

  <span class="comment-title"><?php print $title ?></span>

  <div class="submitted">
    <?php print $submitted ?>
  </div>

  <div class="content">
    <?php print $content ?>
    <?php if ($signature): ?>
    <div class="user-signature clear-block">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>

  <?php print $links ?>
</div>