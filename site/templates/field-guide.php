<?php snippet('header') ?>

<section class="wrapper small field-guide">
	<header class="blog">
		<h1><?= $page->title()->html() ?></h1>
		<img src="assets/images/field-guide.jpg" alt="The UX Tools Field Guide"/>
		<div class="intro-text"><?= $page->text()->kirbytext() ?></div>
	</header>
	<hr>
<div class="table-of-contents">
<h4>Table of Contents</h4>
<ul>
	<?php foreach(page('guides')->children() as $article): ?>
	<li>
	  <a href="<?php echo $article->url() ?>">
	  	<h5>Chapter <?php echo $article->num() ?><span class="long-bar"></span></h5>
		<h3>
		  <?php echo html($article->shorttitle()) ?>
		</h3>
	  </a>
	</li>
	<?php endforeach ?>
  </ul>
 </div>

<hr>

<?php snippet('google-ad') ?>

</section>

<?php snippet('signup-form') ?>

<?php snippet('footer') ?>