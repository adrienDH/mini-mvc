<html>
<head>

	<title><?= $mainController->getMetaTitle() ?></title>
	<meta name="description" content="<?= $mainController->getMetaDescription() ?>" />
	<meta name="keywords" content="<?= $mainController->getMetaKeywords() ?>"> 

	<link rel="stylesheet" type="text/css" href="./resources/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/common/common.css">
	
	
	<?php foreach($mainController->getCssPaths() as $css): ?>
		<?= "<link rel='stylesheet' type='text/css' href='" . $css .  ".css'>" ?>
	<?php endforeach;?>
</head>
<body>