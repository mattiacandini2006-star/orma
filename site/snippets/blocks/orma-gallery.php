<?php
$images = $block->images()->toFiles();
$columns = $block->columns()->or('2')->value();
if ($images->isNotEmpty()):
?>
<figure class="orma-gallery">
  <div class="orma-gallery__grid" style="--gallery-columns: <?= esc($columns, 'attr') ?>">
    <?php foreach ($images as $image): ?>
      <div class="orma-gallery__item">
        <img
          src="<?= $image->url() ?>"
          alt="<?= $image->alt()->esc() ?>"
          loading="lazy"
        >
      </div>
    <?php endforeach ?>
  </div>
  <?php if ($block->caption()->isNotEmpty()): ?>
    <figcaption><?= $block->caption() ?></figcaption>
  <?php endif ?>
</figure>
<?php endif ?>
