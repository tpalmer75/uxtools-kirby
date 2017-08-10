	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="google-site-verification" content="_cIoag6QS8rrWSHpRrQFZ5vqDU2v0w1xKkxRmorbxmg"/>

	<!-- Twitter Card data -->
  <meta name="twitter:card" value="summary">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?= $page->title()->html() ?>" />

  <?php if($page->content()->has('type')): ?>
      <meta property="og:type" content="<?= $page->type() ?>" />
	<?php endif ?>
  
  <meta property="og:url" content="<?= $page->url() ?>" />

  <?php if($page->content()->has('socialimage')): ?>
      <meta property="og:image" content="<?= $page->socialimage()->toFile()->url() ?>" />
	<?php endif ?>

	<?php if($page->content()->has('description')): ?>
      <meta property="og:description" content="<?= $page->description()->html() ?>" />
	<?php endif ?>
  
  <meta name="robots" content="index, follow"/>
  


  