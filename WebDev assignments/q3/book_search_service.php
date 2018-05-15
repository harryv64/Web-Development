<?php 
header('Access-Control-Allow-Origin: *');
		
	$title = $_POST["title"];
	$author = $_POST["author"];

	$xml = simplexml_load_file("bookshelf2.xml");
			
	$xml2 = "<bookshelf>";
	echo $xml2;
	foreach ($xml->book as $book) {
		if ($book->title == $title | $book->author == $author) {
			$xml2 .= $book->asXML();
		}
	}
	$xml2 .= "</bookshelf>";
	echo htmlentities($xml2);
   
?>
