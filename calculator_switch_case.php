<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator-2</title>
</head>
<body>
	<form action="calculator_switch_case.php" method="post">
		Number 1:<input type="number" name="num1"><br>
		Operator:<input type="text" name="op"><br>
		Number 2:<input type="number" name="num2"><br>
		<input type="submit" name="">
	</form>
<?php
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];
   $op = $_POST['op'];

   switch ([$num1,$num2]) {
   	case $op=='+':
   		echo $num1 + $num2;
   		break;
   	case $op=='-':
   		echo $num1 - $num2;
   		break;
   	case $op=='*':
   		echo $num1 * $num2;
   		break;
   	case $op=='/':
   		echo $num1 / $num2;
   		break;
   	
   	default:
   		echo "Invalid Operator.";
   		break;
   }

?>


</body>
</html>