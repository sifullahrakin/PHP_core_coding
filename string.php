<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>String</title>
</head>
<body>
     <?php
         
         $phrase = "php is cool!";

         echo strtolower($phrase);
         echo "<br>";
         echo strtoupper($phrase);
         echo "<br>";
         echo strtoupper("dog");
         echo "<br>";
         echo strlen($phrase);
         echo "<br>";
         echo $phrase[0];
         echo "<br>";
         echo str_replace("php", "Panda", $phrase);
         echo "<br>";
         echo substr($phrase, 7);
         echo "<br>";
         echo substr($phrase,7,3);
         echo "<br>";
         $phrase[0] = "T";
         echo $phrase;
         echo "<br>";



     ?>
</body>
</html>