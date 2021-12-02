<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>For Loop</title>
</head>
<body>
	<?php

	   $luckyNumber = array(4,8,6,5,7);
	   for ($i=1; $i<count($luckyNumber); $i++)
	   {
	   	echo "$luckyNumber[$i] <br>";
	   }
	?>

</body>
</html>