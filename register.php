<?php
	$servername = "localhost";
	$root = "root";
	$conn = mysql_connect($servername, $root);
	mysql_select_db("User", $conn);
	$sql = "insert into user(email ,username, password ,registrationDate) values ('$_POST[email]', '$_POST[username]', '$_POST[password]' , CURDATE())";
	mysql_query($sql, $conn);
	echo "Sign Up complete<br/><br/>";
	print "<a href='registration.html'> Return to Sign up page </a>";
?>
