<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>associative_array</title>
</head>
<body>
	<form action="associative_array.php" method="post">
		
		Enter Name:<input type="text" name="student">
		<input type="submit" name="">
	</form>

	<?php
         
         $grades = array("Jim" =>"A+" , "John" => "A-", "Duke"=>"A");
         echo $grades[$_POST["student"]];

	?>

</body>
</html>