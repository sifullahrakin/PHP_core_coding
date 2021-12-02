<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator-1</title>
</head>
<body>

	<form action="calculator_if_else.php" method="post">
		
		First Number:<input type="number" step="0.001" name="num1"><br>
		Operator:<input type="text" name="op"><br>
		Second Number:<input type="number" name="num2"><br>
		<input type="submit" name="">



	</form>

	<?php

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$op = $_POST['op'];

	if ($op=="+") {
		echo $num1+$num2;
	}
	elseif ($op=="-") {
		echo $num1-$num2;
	}
	elseif ($op=="*") {
		echo $num1*$num2;
	}
	elseif ($op=="/") {
		echo $num1/$num2;
	}
	else{
		echo "Enter Valid operator";
	}

	?>

</body>
</html>