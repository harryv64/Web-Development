<?xml version="1.0" encoding="utf-8"?>
<?xml-stylesheet type="text/xsl" href="bookshelf2.xsl"?>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="loadxmlstring.js"></script>
	</head>
	<body>
	<form  method="post" id="thisForm">
	<p>Author: <input type=text name="author" size=20> </p>
	<p>Title: <input type=text name="title" size=20> </p>
	</form>
	<p><input type="submit" name="search" id="search" value="Search"> 
	<input type="reset" name="reset" value="Reset"> </p>
	<p id = "answer"></p>
	<table id="demo"></table>
	<script>
	$(document).ready(function(){
		$("#search").click(function(){
			$.post( "https://hopper.wlu.ca/~vija3050/book_search_service.php", $("#thisForm").serialize()).done(function( data ) {
				
				var xml = loadXMLString(data)
				display(xml);
				
			});
		});
	});
	function display(xml) {
		var x, i, xmlDoc, table;
		var xmlDoc = xml;
		var table="<tr><th>author</th><th>title</th><th>publisher</th><th>publishdate</th><th>description</th><th>location</th></tr>";
		var y = xml.getElementsByTagName("bookshelf")[0].childNodes[1].nodeValue;
		console.log(y);
		x = loadXMLString(y);
		console.log(x);
		x=x.getElementsByTagName("book");
		console.log(x);
		for (i = 0; i <x.length; i++) { 
			table += "<tr><td>" +
			x[i].getElementsByTagName("author")[0].childNodes[0].nodeValue +
			"</td><td>" +
			x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue +
			"</td><td>"+
			x[i].getElementsByTagName("publisher")[0].childNodes[0].nodeValue +
			"</td><td>"+
			x[i].getElementsByTagName("publishdate")[0].childNodes[0].nodeValue +
			"</td><td>"+
			x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue +
			"</td><td>"+
			x[i].getElementsByTagName("location")[0].childNodes[0].nodeValue +
			"</td></tr>";
		}
	document.getElementById("demo").innerHTML = table;
	}
</script>

	</body>
</html>