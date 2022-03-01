<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<center>
	<u><h1>Welcome Home!</h1></u>
	<a href="create.php"> Create New User</a> |
	<a href="userlist.php"> User List</a> |
	<a href="logout.php"> Logout</a>
	</center>
</body>
</html>

<?php
	}
	else
	{
		header('location: login.html');
	}
?>