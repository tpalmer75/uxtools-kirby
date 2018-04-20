<?php snippet('header') ?>

	<section class="ui-kit">
		<header>
			<div>
				<h1><?= $page->title()->html() ?></h1>
				<h2><?= $page->subtitle()->html() ?></h2>
				<div class="buttons">
					<a class="no-underline" href="https://framer.cloud/cEuQA"><button class="preview-button white">Preview</button></a>
					<a class="no-underline" href="https://gum.co/framer-form-elements-ui-kit"><button class="framer-button blue"><img src="/assets/images/logos/framer-2.png">Download for Framer</button></a>
				</div>
			</div>
		</header>
		<img class="floating-hero" src="<?= $page->url() ?>/<?= $page->mainimage() ?>">
		<article>
			<?= $page->text()->kirbytext() ?>
		</article>


	<div class="social-sharing">

	<button class="white">
		<?= (new Asset("assets/images/icons/twitter.svg"))->content() ?>
		<a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @_taylorpalmer')?>" target="blank" title="Tweet this">Share on Twitter</a>
	</button>

	<button class="white">

		<?= (new Asset("assets/images/icons/facebook-box.svg"))->content() ?>
		<a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">Share on Facebook</a>
		</button>


	</div>
	</section>



<?php snippet('signup-form') ?>

<?php snippet('footer') ?>