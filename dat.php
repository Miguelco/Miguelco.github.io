
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
	<?php
	$GameDataInG = $_GET['g'];
	$GameDataInP = $_POST['p'];
	       
	$curLog = file_get_contents('log.txt');
	$curLog .= "G: ".$GameDataInG." -- P: ". $GameDataInP ."\n\n";
	file_put_contents('log.txt', $curLog);
	
	 echo  "meco";
	?>
 </body>
</html>