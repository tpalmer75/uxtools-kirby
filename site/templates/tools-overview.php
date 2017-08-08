<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <hr />
    </header>

    <ul>
        <?php foreach($page->children()->visible() as $tool): ?>
          <li>
          <a href="<?= $tool->url()?>">
          <p><?= $tool->title() ?></p>
          </a>
          </li>
        <?php endforeach ?>
      </ul>
      
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>