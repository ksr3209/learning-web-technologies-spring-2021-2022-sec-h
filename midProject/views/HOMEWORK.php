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
	<title>Homeworks</title>
	<body style="background-color:powderblue;">
</head>
<body>

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
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="ROUTINE.php">Routine</a>
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
							<a href="teacherinfo.php">TEACHER'SINFO</a>
						</td>
					</tr>
				</table>
			</td>
			<td width="10%"></td>
			<td width="50%">
				<fieldset>
					<legend>Homework</legend>
					<form method="POST" action="../controller/addNoticeCheck.php">
						<table>
							<tr>
								<td>Date</td>
								<td>
									<input type="date" name="date" value="">
								</td>
							</tr>
							<tr>
								<td>STUDENT NAME</td>
								<td><input type="text" name="title" value=""></td>
							</tr>
							<tr>
								<td>ROll</td>
								<td><input type="text" name="title" value=""></td>
							</tr>
							<tr>
								<td>TEACHER's NAME</td>
								<td><input type="text" name="title" value=""></td>
							</tr>
							<tr>
								<td>COURSE</td>
								<td><input type="text" name="details" value=""></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="Upload" value="Upload"></td>
							</tr>
						</table>
					</form>
				</fieldset>
				<br>
				<fieldset>
					<legend>Upload PDF/IMG</legend>
					<form method="POST" action="../controller/fileUploadCheck.php" enctype="multipart/form-data">
						File: <input type="file" name="myfile"> 	
						<input type="submit" name="submit" value="Upload">
					</form>
				</fieldset>
			</td>
			<td width="30%"></td>
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