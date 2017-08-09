<!-- Twitter Card data -->
  <meta name="twitter:card" value="summary">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?= $page->title()->html() ?>" />
  <meta property="og:type" content="<?= $page->type() ?>" />
  <meta property="og:url" content="<?= $page->url() ?>" />
  <meta property="og:image" content="<?= $page->coverimage()->toFile() ?>" />
  <meta property="og:description" content="<?= $page->description()->html() ?>" />