<?php
$menuItems = $site->menu()->toStructure();
if ($menuItems->isNotEmpty()):
?>
<nav class="site-menu" aria-label="Menu principale">
  <ul>
    <?php foreach ($menuItems as $item): ?>
      <?php if ($linkedPage = $item->page()->toPage()): ?>
        <li>
          <a
            href="<?= $linkedPage->url() ?>"
            <?php e($linkedPage->isOpen(), ' aria-current="page" class="is-active"') ?>
          >
            <?= $item->label()->or($linkedPage->title())->esc() ?>
          </a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
</nav>
<?php endif ?>
