<?php snippet('header') ?>

  <main class="wrapper medium" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
    </header>
      
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>