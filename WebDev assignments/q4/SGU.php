<!DOCTYPE html>
<html>
   <body>
   <h1> Submit </h1>
      <form action = "<?php $_PHP_SELF ?>" method = "POST",id = "add_course">
         CourseID: <input type = "text" name = "courseID" /><br>
         Title: <input type = "text" name = "title" />	<br>
		 Term: <input type = "text" name = "term" />	<br>	 
         Website: <input type = "text" name = "website" />	<br>
		 Last Name: <input type = "text" name = "last" /><br>		 
         First Name: <input type = "text" name = "first" /><br>
		 Email: <input type = "text" name = "email" />		<br> 
		 Password: <input type = "text" name = "password" /><br>		 
		 Room: <input type = "text" name = "room" />	<br>	 	 
         <input type = "submit" name = "submit_button" /><br>
      </form>
	  <br>
	  <br>
	<h1> Get </h1>
      <form action = "<?php $_PHP_SELF ?>" method = "POST", id = "get_course">
         CourseID: <input type = "text" name = "courseID" /><br>
         Title: <input type = "text" name = "title" />	<br>
		 <input type = "submit" name = "get_button" /><br>
      </form>
	  <h1> Update </h1>
	     <form action = "<?php $_PHP_SELF ?>" method = "POST", id = "update_course">
         CourseID: <input type = "text" name = "courseID" /><br>
         Title: <input type = "text" name = "title" />	<br>
		 Term: <input type = "text" name = "term" />	<br>	 
         Website: <input type = "text" name = "website" />	<br>
		 Last Name: <input type = "text" name = "last" /><br>		 
         First Name: <input type = "text" name = "first" /><br>
		 Email: <input type = "text" name = "email" />		<br> 
		 Password: <input type = "text" name = "password" /><br>		 
		 Room: <input type = "text" name = "room" />	<br>	
	     <input type="submit" name="upd" id="upd" value="upd"> 
      </form>
	  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
	<script src="https://hopper.wlu.ca/~vija3050/courses.js"></script>
	<?php

	$(document).ready(function(){
		$("#upd").click(function(){
			console.log("hello");
			$.post( "https://hopper.wlu.ca/~vija3050/a3q4a.php", $("#update_course").serialize()).done(function( data ) {
			});
		});
	});
	?>

	     </body>
</html>