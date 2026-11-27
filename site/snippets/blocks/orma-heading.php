<?php
$level = $block->level()->or('h2')->value();
$align = $block->align()->or('left')->value();
?>
<<?= $level ?> class="orma-heading orma-heading--<?= $level ?> orma-align-<?= $align ?>">
  <?= $block->text() ?>
</<?= $level ?>>
