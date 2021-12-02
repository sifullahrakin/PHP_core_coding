<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST</title>
</head>
<body>

	<form action="post.php" method="post">
		
		Password: <input type="password" name="password">
		<input type="submit" name="">

	</form>

	<?php
       
      echo $_POST['password'];


	?>

</body>
</html>