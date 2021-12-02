<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Class & Object</title>
</head>
<body>

	<?php


        //creating a class book and declare variables
	    class Book{
	    	var $title;
	    	var $author;
	    	var $pages;

	    }
        
        $book1 = new Book;

        $book1 ->title = "Harry Potter";
        $book1 ->author = "JK Rowling";
        $book1 ->pages = 500;

        echo $book1->author;


	?>

</body>
</html>