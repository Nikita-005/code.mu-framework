<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title> <!-- выводим тайтл страницы -->
		<link rel="stylesheet" href="project/webroot/styles.css">
	</head>
	<body>
		<header>
			хедер сайта <?$dir = __DIR__ ?>
		</header>
		<div class="container">
			<aside class="sidebar left">
				левый сайдбар
			</aside>
			<main>
				<?= $content ?>
			</main>
			<aside class="sidebar right">
				правый сайдбар
			</aside>
		</div>
		<footer>
			футер сайта
		</footer>
	</body>
</html>