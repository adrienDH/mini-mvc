<html>
<title>home</title>

<link rel="stylesheet" type="text/css" href="./resources/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./resources/css/common/common.css">


<?php foreach($mainController->getCssPaths() as $css): ?>
	<?= "<link rel='stylesheet' type='text/css' href='" . $css .  ".css'>" ?>
<?php endforeach;?>
<body>