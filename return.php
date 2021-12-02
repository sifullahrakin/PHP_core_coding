<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>return.php</title>
</head>
<body>

	<?php

	function cube($num){
		return $num * $num * $num;
	}
    
    $cubeResult = cube(4);
    echo $cubeResult;

	?>

</body>
</html>