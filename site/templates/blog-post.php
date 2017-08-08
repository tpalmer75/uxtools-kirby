<?php snippet('header') ?>

	<section class="blog">
		<?php snippet('coverimage', $page) ?>

		<article class="blog-content">
			<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F j, Y') ?></time>
			<h1><?= $page->title()->html() ?></h1>
			<?= $page->text()->kirbytext() ?>
		</article>
	</section>

<?php snippet('signup-form') ?>

<?php snippet('footer') ?>