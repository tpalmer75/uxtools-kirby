<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $page->description()->html() ?>">

	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700|PT+Serif:400,400i,700" rel="stylesheet">

	<?= snippet('head/favicon') ?>

	<?= snippet('head/social') ?>

	<?= css('/assets/css/tools.css?ver=1.5') ?>

</head>
<body>
	<div id="tools">
	<header id="main-header">
		
		<?php snippet('top-bar') ?>
		<div class="bottom-bar">
			<div class="scroll-tabs">
				<ul>
					<li>
						<router-link to="design"><span>Design</span></router-link>
					</li>
					<li>
						<router-link to="prototyping"><span>Prototyping</span></router-link>
					</li>
					<li>
						<router-link to="handoff"><span>Handoff</span></router-link>
					</li>
					<li>
						<router-link to="design-libraries"><span>Design Libraries</span></router-link>
					</li>
					<li>
						<router-link to="versioning"><span>Versioning</span></router-link>
					</li>
					<li>
						<router-link to="monitoring"><span>Monitoring</span></router-link>
					</li>
				</ul>
			</div>
		</div>

	</header>