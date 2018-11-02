<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $page->description()->html() ?>">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700|PT+Serif:400,400i,700" rel="stylesheet">

	<?= snippet('head/social') ?>

	<?= snippet('head/favicon') ?>

	<?= css('/assets/css/library.css?ver=?ver=20181024') ?>

</head>
<body>
	<div id="library" v-bind:class="{'no-scroll':showModal || showSidebar}">    
	<header id="main-header">
		<?= snippet('survey-banner')?>
		<?php snippet('top-bar') ?>

		<div class="bottom-bar mobile">
			<div class="wrapper"><a @click="showSidebar = true" class="show-library-sidebar">Refine</a>
			  <div class="search mobile">
				<input placeholder="Search..." v-model="searchTerm" v-on:change="categoryData.categoryModel.tags=''"/>
				<?= (new Asset("assets/images/icons/magnify.svg"))->content() ?>
			  </div>
			</div>
		</div>
	</header>