<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title()->esc() ?> — <?= $site->title()->esc() ?></title>
</head>
<body>
  <header>
    <?php snippet('menu') ?>
  </header>

  <main>
    <h1><?= $page->title()->esc() ?></h1>
  </main>
</body>
</html>
