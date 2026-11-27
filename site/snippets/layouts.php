<?php foreach ($page->layout()->toLayouts() as $layout): ?>
  <?php $theme = $layout->attrs()->theme()->or('light'); ?>
  <section class="orma-section orma-section--<?= $theme->esc() ?>" id="<?= $layout->id() ?>">
    <div class="orma-grid">
      <?php foreach ($layout->columns() as $column): ?>
        <div class="orma-column" style="--span: <?= $column->span() ?>">
          <?= $column->blocks() ?>
        </div>
      <?php endforeach ?>
    </div>
  </section>
<?php endforeach ?>
