<?php
$style = $block->style()->or('line')->value();
$size = $block->size()->or('medium')->value();
?>
<div class="orma-spacer orma-spacer--<?= $size ?>" aria-hidden="true">
  <?php if ($style === 'line'): ?>
    <hr class="orma-spacer__line">
  <?php endif ?>
</div>
