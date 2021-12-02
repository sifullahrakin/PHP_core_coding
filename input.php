<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>input</title>
</head>
<body>

	<form action="input.php" method="get">

		Name:<input type="text" name="name"><br>
		<br>
		Age : <input type="number" name="age"><br>
		<input type="submit" name=""><br>
		
	</form>
	<br>
	Your name <?php echo $_GET["name"]; ?>
	<br>
	Age <?php echo $_GET["age"]; ?>

</body>
</html>