<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
	<meta name="description" content="<?= $page->description()->html() ?>">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700|PT+Serif:400,400i,700" rel="stylesheet">

	<?= snippet('head/favicon') ?>

	<?= snippet('head/social') ?>

	<?= css('/assets/css/tools.css?ver=20181024') ?>

</head>
<body>
	<div id="tools">
	<header id="main-header">
		<!-- <?= snippet('survey-banner')?> -->
		<?php snippet('top-bar') ?>
		<div class="bottom-bar">
			<div id="tab-container">
				<div class="tab-left">
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
								<router-link to="design-libraries"><span>Design&nbsp;Libraries</span></router-link>
							</li>
							<li>
								<router-link to="versioning"><span>Versioning</span></router-link>
							</li>
							<li>
								<router-link to="monitoring"><span>Monitoring</span></router-link>
							</li>
						</ul>
					</div>
				<div class="tab-right">
					<a href="https://uxtools.typeform.com/to/EFoJO3" target="_blank">
						<button class="small light-blue"><?= (new Asset("assets/images/icons/pencil-box-outline.svg"))->content() ?> Suggest a change</button>
					</a>
				</div>
			</div>
		</div>

	</header>