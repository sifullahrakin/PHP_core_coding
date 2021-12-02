<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CheckBox</title>
</head>
<body>

	<form action="checkbox.php" method="post">

		Apples:<input type="CheckBox" name="fruits[]" value="apples">
		Oranges:<input type="CheckBox" name="fruits[]" value="oranges">
		Banana:<input type="CheckBox" name="fruits[]" value="banana">
		<input type="submit" name="">
		

	</form>

	<?php

	    $fruits = $_POST['fruits'];
	    echo $fruits[1];
	    



	?>

</body>
</html>