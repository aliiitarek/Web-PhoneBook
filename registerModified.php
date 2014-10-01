<?php
	$servername = "localhost";
	$root = "root";
	$conn = mysql_connect($servername, $root);
	mysql_select_db("User", $conn);
	$sql = "insert into user(email ,username, password ,registrationDate) values ('$_POST[email]', '$_POST[username]', '$_POST[password]' , CURDATE())";
	$sqlCheck = "SELECT * FROM User WHERE username = '$_POST[username]'  OR email = '$_POST[email]' ";
	$query = mysql_query($sqlCheck, $conn);
	$count = mysql_num_rows($query);
	if($count == 0){
		mysql_query($sql, $conn);
		echo "Sign Up complete<br/><br/>";
	}else {
		echo "This contact already exists<br/>";
	}
	
	print "<a href='registration.html'> Return to Sign up page </a>";
	
?>