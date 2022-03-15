<?php 
	require_once('../controller/headerCookie.php');
	$uname =  $_SESSION['uname'];
?>

<html>
<head>
	<title>Users</title>
</head>
<body>
	<body style="background-color:powderblue;">
	
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
		<tr valign="top">
			<td align="center" width="20%">
				<!-- Side menu -->
				<table border="1"  width="100%" >
					<tr>
						<td align="center" height="50px">
							<a href="studenthome.php">Home</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="Notices.php">Notice</a>
						</td>
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
			<td width="70%">
				<table border="1" width="80%">
					<tr  height="50px">
						<td align="center"><b>User Nanme</b></td>
						<td align="center"><b>Email Address</b></td>
						
					</tr>
<!--Show Teachers--------------------------------------------------------------->
					<?php 
						$file = fopen('../model/userTeacher.txt', 'r');
						while(!feof($file)){
							$user = fgets($file);
							if ($user!=null) {
								$userTeacherArray = explode('|', $user);
					?>
					<tr>
						
						<td align="center"><?=$userTeacherArray[1]?></td>
						
						<td align="center"><?=$userTeacherArray[3]?></td>
						
					</tr>
					<?php
							}
						}
						fclose($file);
					?>

					

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