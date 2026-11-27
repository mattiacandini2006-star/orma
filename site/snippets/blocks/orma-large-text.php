<?php $size = $block->size()->or('medium')->value(); ?>
<div class="orma-large-text orma-large-text--<?= $size ?>">
  <?= $block->text() ?>
</div>
