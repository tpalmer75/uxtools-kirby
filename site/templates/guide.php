<?php snippet('header') ?>

	<section class="blog-post">
		<img class="guide-icon" src="/assets/images/vectors/<?= $page->icon() ?>">

		<article class="blog-content">
			<h1><?= $page->title()->html() ?></h1>
			<?= $page->text()->kirbytext() ?>
		</article>


	<div class="social-sharing">

	<button class="white">
		<?= (new Asset("assets/images/icons/twitter.svg"))->content() ?>
		<a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @uxtoolsco')?>" target="blank" title="Tweet this">Share on Twitter</a>
	</button>

	<button class="white">

		<?= (new Asset("assets/images/icons/facebook-box.svg"))->content() ?>
		<a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">Share on Facebook</a>
		</button>


	</div>
	</section>


<?php snippet('signup-form') ?>

<?php snippet('footer') ?>