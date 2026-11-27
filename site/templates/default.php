<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title()->esc() ?> — <?= $site->title()->esc() ?></title>
  <?= css('assets/css/index.css') ?>
</head>
<body>
  <?php snippet('header') ?>

  <main class="site-main">
    <?php if ($page->layout()->isNotEmpty()): ?>
      <?php snippet('layouts') ?>
    <?php else: ?>
      <section class="orma-section">
        <div class="orma-grid">
          <div class="orma-column" style="--span: 12">
            <h1 class="orma-heading orma-heading--h1"><?= $page->title()->esc() ?></h1>
          </div>
        </div>
      </section>
    <?php endif ?>
  </main>
</body>
</html>
