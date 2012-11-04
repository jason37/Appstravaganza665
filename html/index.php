<?php 
require('../includes/config/config.php');
require('Store.php');


$store = Store::init('Appstravaganza App Store');

//var_dump($store);
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?= $store->name ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<div>
			<h1>
				<?= $store->name ?>
			</h1>
			
			<h2>
				Today's featured apps
			</h2>
			
			<? foreach($store->getApps() as $app) { ?>
				<div>
					<h3>
						<?= $app->title ?>
					</h3>
					<div>
						published by <?= $app->developer->name ?>
					</div>
					<div>
						<?= $app->price ?>
					</div>
				</div>
			<? } ?>
		</div>
	</body>
</html>
