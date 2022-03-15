<?php 
	require_once('../controller/headerCookie.php');

	$uname =  $_SESSION['uname'];
	$file = fopen('../model/userStudent.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[1]) == $uname){
			$userData = $userArray;
			break;
		}
	}
?>

<html>
<head>
	<title>Profile</title>
</head>

	<body style="background-color:powderblue;">
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

tr:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}

th:nth-child(even),td:nth-child(even) {
  background-color: rgba(150, 212, 212, 0.4);
}
</style>
	
	<!-- Menu -->
	<table border="0" width="100%" height="100px">
		<tr>
			<td align="left">
				<img src="img/logo.png" width="100px" height="100px">
			</td>
			<td align="right">
				<h3>
					<a href="studentProfile.php">Profile</a> |
					<a href="../controller/logout.php"> Logout </a>
				</h3>
			</td>
		</tr>
	</table>
	<hr>

<!-- Content -->
	<table border="0" width="100%" height="500px">
		<tr>
			<td align="center" width="20%" valign="top">
				<table border="1"  width="100%" >
					<tr>
						<td align="center" height="50px">
							<a href="studentHome.php">Home</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="Notices.php">Notice</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="Homework.php">HOMEWORK</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="Result.php">RESULT</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="teacherinfo.php">TEACHER</a>
						</td>
					</tr>
					
					
				</table>
			</td>
			<td width="10%"></td>
			<td width="30%">
				<table>
					<tr>
						<td><b>User Type:</b></td>
						<td width="100px"></td>
						<td><?=$userData[0]?></td>
					</tr>
					<tr>
						<td colspan="3"><hr></td>
					</tr>
					<tr>
						<td><b>Username:</b></td>
						<td width="100px"></td>
						<td><?=$userData[1]?></td>
					</tr>
					<tr>
						<td colspan="3"><hr></td>
					</tr>
					<tr>
						<td><b>Password:</b></td>
						<td width="100px"></td>
						<td><?=$userData[2]?></td>
					</tr>
					<tr>
						<td colspan="3"><hr></td>
					</tr>
					<tr>
						<td><b>Email:</b></td>
						<td width="100px"></td>
						<td><?=$userData[3]?></td>
					</tr>
				</table>
			</td>
			
			<td width="40%">
				<img src="img/Profile.jpg" width="200px" height="200px">
				<!--
				<hr width="200px" align="left">
				<form method="POST" action="../controller/profileImgUploadCheck.php" enctype="multipart/form-data">
					File: <input type="file" name="myfile"> 
					<br>
					<br>	
					<input type="submit" name="submit" value="Upload">
				</form>
				-->
			</td>
			
		</tr>
	</table>

<!-- Footer -->	
	<hr>
	<table border="0" width="100%" height="50px">
		<tr>
			<td colspan="2" align="center">
				Copyright ~ Web Technology, Section: H, Group: 3
			</td>
		</tr>
	</table>
	
</body>
</html>
