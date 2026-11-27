<?php if ($image = $block->image()->toFile()): ?>
  <?php $ratio = $block->ratio()->value(); ?>
  <figure class="orma-image">
    <div class="orma-image__frame"<?php e($ratio, ' style="aspect-ratio: ' . esc($ratio, 'attr') . '"') ?>>
      <img
        src="<?= $image->url() ?>"
        alt="<?= $block->alt()->or($image->alt())->esc() ?>"
        loading="lazy"
      >
    </div>
    <?php if ($block->caption()->isNotEmpty()): ?>
      <figcaption><?= $block->caption() ?></figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>
