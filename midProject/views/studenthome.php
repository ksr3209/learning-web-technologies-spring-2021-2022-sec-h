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
	<title>Home Page</title>

</head>
<body>
	<body bgcolor="c1ddd">
<div align="center">
	
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
							<a href="grading.php">Grading system</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="routine.php">Routine</a>
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
			<td width="70%">
				<!-- Here -->
				<h1>TIME TABLE</h1>
	<table width="40%" height="374" border=1 cellspacing="5" bgcolor="#FFCC99">
		<!--<caption>Timetable</caption>-->
		<tr>
			<td align="center" height="50"
				width="100"><br>
				<b>Day/Period</b></br>
			</td>
			<td align="center" height="50"
				width="100">
				<b>I<br>9:30-10:20</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>II<br>10:20-11:10</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>III<br>11:10-12:00</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>12:00-12:40</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>IV<br>12:40-1:30</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>V<br>1:30-2:20</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>VI<br>2:20-3:10</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>VII<br>3:10-4:00</b>
			</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Monday</b></td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Mat</td>
			<td align="center" height="50">Che</td>
			<td rowspan="6" align="center" height="50">
				<h2>L<br>U<br>N<br>C<br>H</h2>
			</td>
			<td colspan="3" align="center"
				height="50">LAB</td>
			<td align="center" height="50">Phy</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Tuesday</b>
			</td>
			<td colspan="3" align="center"
				height="50">LAB
			</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Che</td>
			<td align="center" height="50">Mat</td>
			<td align="center" height="50">SPORTS</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Wednesday</b>
			</td>
			<td align="center" height="50">Mat</td>
			<td align="center" height="50">phy</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Che</td>
			<td colspan="3" align="center"
				height="50">LIBRARY
			</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Thursday</b>
			</td>
			<td align="center" height="50">Phy</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Che</td>
			<td colspan="3" align="center"
				height="50">LAB
			</td>
			<td align="center" height="50">Mat</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Friday</b>
			</td>
			<td colspan="3" align="center"
				height="50">LAB
			</td>
			<td align="center" height="50">Mat</td>
			<td align="center" height="50">Che</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Phy</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Saturday</b>
			</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Che</td>
			<td align="center" height="50">Mat</td>
			<td colspan="3" align="center"
				height="50">SEMINAR
			</td>
			<td align="center" height="50">SPORTS</td>
		</tr>
	</table>			
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