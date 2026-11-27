<?php
$archivePage = $block->parent()->toPage() ?? $site->find('archivio');
$items = $archivePage ? $archivePage->children()->listed() : null;
if ($items && $items->isNotEmpty()):
?>
<div class="orma-archive-grid">
  <?php foreach ($items as $item): ?>
    <?php $cover = $item->cover()->toFile() ?? $item->image(); ?>
    <a class="orma-archive-tile" href="<?= $item->url() ?>">
      <div class="orma-archive-tile__media">
        <?php if ($cover): ?>
          <img
            src="<?= $cover->crop(800, 800)->url() ?>"
            alt="<?= $cover->alt()->or($item->title())->esc() ?>"
            loading="lazy"
          >
        <?php endif ?>
      </div>
      <div class="orma-archive-tile__meta">
        <div class="orma-archive-tile__title"><?= $item->title()->esc() ?></div>
        <?php if ($item->students()->isNotEmpty()): ?>
          <div class="orma-archive-tile__students"><?= $item->students()->esc() ?></div>
        <?php endif ?>
      </div>
    </a>
  <?php endforeach ?>
</div>
<?php endif ?>
