<?php
	$servername = "localhost";
	$root = "root";
	$conn = mysql_connect($servername, $root);
	mysql_select_db("User", $conn);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM User WHERE username = '$username' AND password = '$password'";
	$query = mysql_query($sql, $conn);
	$count = mysql_num_rows($query);
	$update = "UPDATE User SET lastLoginDate= CURDATE() WHERE username = '$username'";	
	if($count != 0){
		echo "Sign In successful <br/><br/>" ;
		mysql_query($update , $conn);
	}
	else{
		echo "Sign In FAILED" ;
	}
	print "<a href='registration.html'> Return to Sign up page </a>";
?>