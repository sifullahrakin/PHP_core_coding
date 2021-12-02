<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MadLibs</title>
</head>
<body>
	<form action="MadLibs.php" method="get">
		
		Color:<input type="text" name="color"><br>
		Plural Noun:<input type="text" name="plularNoun"><br>
		Celebrity:<input type="text" name="celebrity"><br>

		<input type="submit" name="">


	</form>

	<?php

	$color = $_GET['color'];
	$pluralNoun = $_GET['plularNoun'];
	$celebrity = $_GET['celebrity'];


	echo "Roses are {$color} <br>";
	echo "{$pluralNoun} are blue<br>";
	echo "I love {$celebrity}"; 



	?>

</body>
</html>