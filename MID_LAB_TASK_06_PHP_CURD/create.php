

<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){

					$myfile2 = fopen('userList.txt', 'a');
					$user2 = $_POST['username']."|".$_POST['password']."|".$_POST['email']."\r\n";

					fwrite($myfile2, $user2);
					fclose($myfile2);

					header('location: userlist.php');
				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>




<html>
<head>
	<title>Create New User</title>
</head>

<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="logout.php">Logout </a> 
	</center>
	<form method="post">
		<fieldset>
			<legend>Create New</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>