<header class="site-header">
  <a
    class="site-logo<?php e($page->isHomePage(), ' is-home') ?>"
    href="<?= $site->url() ?>"
    <?php e($page->isHomePage(), 'aria-current="page"') ?>
  >
    <?php if ($logo = $site->logo()->toFile()): ?>
      <img src="<?= $logo->url() ?>" alt="<?= $site->title()->esc() ?>">
    <?php else: ?>
      <span><?= $site->title()->esc() ?></span>
    <?php endif ?>
  </a>

  <?php snippet('menu') ?>
</header>
