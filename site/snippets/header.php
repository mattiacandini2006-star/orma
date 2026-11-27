<header class="site-header">
  <a class="site-logo" href="<?= $site->url() ?>">
    <?php if ($logo = $site->logo()->toFile()): ?>
      <img src="<?= $logo->url() ?>" alt="<?= $site->title()->esc() ?>">
    <?php else: ?>
      <span><?= $site->title()->esc() ?></span>
    <?php endif ?>
  </a>

  <?php snippet('menu') ?>
</header>
