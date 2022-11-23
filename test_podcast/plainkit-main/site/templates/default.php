<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title><?= $site->title() ?></title>

	<?= css('assets/css/index.css') ?>
</head>
<body>
	<header>
		<a href='<?= $site->url() ?>'><?= $site->title() ?></a>

		<nav>
			<ul>
				<?php foreach($site->children()->listed() as $navitem): ?>
					<li><a href="<?= $navitem->url()?>"><?= $navitem->title() ?></a></li>
				<?php endforeach ?>
			</ul>
		</nav>
	</header>
	<h1><?= $page->title() ?></h1>
	<?= $page->text() ?>
</body>
</html>

