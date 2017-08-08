<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <hr />
    </header>
      
    <div class="text wrap">
      <?= $page->description()->html() ?>
    </div>

  </main>

<?php snippet('footer') ?>