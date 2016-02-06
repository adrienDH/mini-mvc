<script type="text/javascript" src="./resources/jquery/jquery.js"></script>
<script type='text/javascript' src='./resources/bootstrap/js/bootstrap.min.js'></script>

<?php foreach($mainController->getJsPaths() as $js): ?>
	<?= "<script type='text/javascript' src='" . $js . ".js'></script>" ?>
<?php endforeach; ?>

</body>
</html>