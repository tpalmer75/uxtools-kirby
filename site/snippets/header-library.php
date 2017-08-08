<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $site->description()->html() ?>">

	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700|PT+Serif:400,400i,700" rel="stylesheet">

	<?= snippet('favicon') ?>

	<?= css('/assets/css/library.css') ?>

</head>
<body>
	<div id="library" v-bind:class="{'no-scroll':showModal || showSidebar}">    
	<header id="main-header">

<?php snippet('top-bar') ?>

<div class="bottom-bar mobile">
	<div class="wrapper"><a @click="showSidebar = true" class="show-library-sidebar">Refine</a>
	  <div class="search mobile">
		<input placeholder="Search..." v-model="searchTerm" v-on:change="categoryData.categoryModel.tags=''"/><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg>
	  </div>
	</div>
</div>
</header>