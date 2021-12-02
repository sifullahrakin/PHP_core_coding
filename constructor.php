<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>constructor</title>
</head>
<body>

	<?php

	   /**
	    * 
	    */
	   class Book
	   { 

	   	var $title;
	   	var $author;
	   	var $pages;
	   	
	   	function __construct($aTitle,$aAuthor,$aPages)
	   	{
	   		$this->title = $aTitle;
	   		$this->author= $aAuthor;
	   		$this->pages = $aPages;

	   	}
	   }

	   $book1 = new Book("Harry Ptter ","JK Rowling ",400);
	   $book2 = new Book("Opekkah ","Humayun Ahmed ",250);

	   echo $book1->title;
	   echo $book1->author;
	   echo $book1->pages;

       echo "<br>";

	   echo $book2->title;
	   echo $book2->author;
	   echo $book2->pages;

	?>

</body>
</html>