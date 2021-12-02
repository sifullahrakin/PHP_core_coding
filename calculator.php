<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>calculator</title>
</head>
<body>
	
	<form action="calculator.php" method="get">
		
		Number 1 :<input type="number" name="num_1">
		<br>
		Number 2 :<input type="number" name="num_2">
		<br>
		<input type="submit" name="">
		<br>


	</form>
    
	<?php echo $_GET['num_1'] + $_GET['num_2'] ?>

</body>
</html>