<?php $title = $block->title()->or($page->title()); ?>
<div class="orma-page-opening">
  <h1 class="orma-page-opening__title"><?= $title->esc() ?></h1>
</div>
