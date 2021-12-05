<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inheritance</title>
</head>
<body>

	<?php

          /**
           parent class
           */
          class Chef
          {
          	
          	function makeChicken()
          	{
          		echo "Make Chicken <br>";
          	}

          	function makeSalad()
          	{
          		echo "Make Salad <br>";
          	}

          	function makeSpecialDish()
          	{
          		echo "Make BBQ ribs <br>";
          	}
          }

          /**
           Child class (inherit Chef class)
           */
          class ItalianChef extends Chef
          {
          	
          	function makePasta(){
          		echo "Make Pasta <br>";
          	}

            /*
            Override a function of parent class
            */

          	function makeSpecialDish()
          	{
          		echo "Make Aluvorta <br>";
          	}
          	
          }

          echo "Chef <br>";
          $chef = new Chef();
          $chef->makeChicken();

          echo "<br>";

          echo "Italian Chef<br>";
          $italianChef = new ItalianChef();
          $italianChef->makeChicken();
          $italianChef->makePasta();
          $italianChef->makeSpecialDish();


	?>

</body>
</html>