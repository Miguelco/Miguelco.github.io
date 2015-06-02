

	<?php
	$GameDataInG = $_GET['g'];
	$GameDataInP = $_POST['p'];
	       
	$curLog = file_get_contents('log.txt');
	$curLog .= "G: ".$GameDataInG." -- P: ". $GameDataInP ."\n\n";
	file_put_contents('log.txt', $curLog);
	?>