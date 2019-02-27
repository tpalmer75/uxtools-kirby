<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $page->description()->html() ?>">

  <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700|PT+Serif:400,400i,700" rel="stylesheet">

  <?= snippet('head/favicon') ?>

  <?= snippet('head/social') ?>

  <?= css('assets/css/style.css?ver=20181210') ?>

</head>
<body>

  <header id="main-header">
    <?= snippet('top-bar')?>
  </header>