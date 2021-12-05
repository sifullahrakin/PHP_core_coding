<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inheritance</title>
</head>
<body>

  <form action="chef.php" method="post">
       
        Chef Type: <input type="text" name="cheftype"><br>
        <input type="submit" name=""><br>

  </form>

	<?php

          /**
           parent class
           */
          class NormalChef
          {
            
            function lineBreak()
            {
              echo "<br>";
            }

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
          class ItalianChef extends NormalChef
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

          /*
          echo "Normal Chef <br>";
          $chef = new NormalChef();
          $chef->makeChicken();

          echo "<br>";

          echo "Italian Chef<br>";
          $italianChef = new ItalianChef();
          $italianChef->makeChicken();
          $italianChef->makePasta();
          $italianChef->makeSpecialDish();
          */

          $chef = $_POST["cheftype"];

          if($chef=="Normal Chef"){

          echo "Normal Chef <br>";
          $chef = new NormalChef();
          $chef->makeChicken();

          } else if($chef=="Italian Chef"){

          echo "Italian Chef<br>";
          $italianChef = new ItalianChef();
          $italianChef->makeChicken();
          $italianChef->makePasta();
          $italianChef->makeSpecialDish();

          }


	?>

</body>
</html>