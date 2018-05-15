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
<?php
	header('Access-Control-Allow-Origin: *');
	$servername = "localhost";
	$username = "vija3050";
	$password = "BigTop_6";
	$count;
	$dbname = "vija3050";
	$ipaddy =  $_SERVER['REMOTE_ADDR'];
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
		if (isset ($_POST['submit_button'])){
			$courseID1 = $_POST['courseID'];
			$title1 = $_POST['title'];
			$term1 = $_POST['term'];
			$website1 = $_POST['website'];
			$last1 = $_POST['last'];
			$first1 = $_POST['first'];
			$email1 = $_POST['email'];
			$password1 = $_POST['password'];
			$room1 = $_POST['room'];
			$subcourse = substr($courseID1,0,1);
			$subcourse2 = substr($courseID1,2,4);
			$length = strlen($courseID1);
			if (ctype_alpha($subcourse) == true && is_numeric($subcourse2)==true && $length == 5){
				$sql = "INSERT INTO myCourse (courseID, title, term, website, Last_Name, First_Name, Email, Password, Room) VALUES ('$courseID1','$title1','$term1','$website1','$last1','$first1','$email1','$password1','$room1')";	
			}
			else{
				echo "Invalid entry for CourseID";
			}
			echo "<br>";
		}
		if (isset ($_POST['get_button'])){
			$courseID1 = $_POST['courseID'];
			$title1 = $_POST['title'];
			$sql = "SELECT * FROM myCourse WHERE courseID = '$courseID1' OR title = '$title1'";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
				echo json_encode($row);
			}
			
		}
		if (isset ($_POST['update_button'])){
			$courseID1 = $_POST['courseID'];
			$title1 = $_POST['title'];
			$term1 = $_POST['term'];
			$website1 = $_POST['website'];
			$last1 = $_POST['last'];
			$first1 = $_POST['first'];
			$email1 = $_POST['email'];
			$password1 = $_POST['password'];
			$room1 = $_POST['room'];
		    $sql = "UPDATE myCourse SET courseID='$courseID1', title='$title1', website='$website1', term='$term1', First_Name='$first1',Last_Name='$last1', Email = '$email1', Password = '$password1', Room = '$room1' WHERE cid='$cid'";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
				echo json_encode($row);
			}
			
		}
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			echo "Connected unsuccessfully";
		}
		if ($conn->query($sql) === TRUE) {
			$db = "yess!!!";
		} 

?>
	<script>
	$(document).ready(function(){
		$("#upd").click(function(){
			console.log("hello");
			$.post( "https://hopper.wlu.ca/~vija3050/a3q4a.php", $("#update_course").serialize()).done(function( data ) {
			});
		});
	});
	</script>
	     </body>
</html>