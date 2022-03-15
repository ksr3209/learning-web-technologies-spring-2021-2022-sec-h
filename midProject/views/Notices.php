<?php 
	require_once('../controller/headerCookie.php');
	$uname =  $_SESSION['uname'];
?>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
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
	<body bgcolor="c1ddd">
	
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
				<table border="1" width="100%">
					<tr>
						<td align="center" width="100px"><b>Date</b></td>
						<td align="center" width="200px"><b>Title</b></td>
						<td align="center"><b>Details</b></td>
						
					</tr>
<!--Show Notice--------------------------------------------------------------->
					<?php 
						$file = fopen('../model/notice.txt', 'r');
						while(!feof($file)){
							$f = fgets($file);
							if ($f!=null) {
								$notice = explode('|', $f);
					?>
					<tr>
						<td align="center" width="100px"><?=$notice[0]?></td>
						<td align="center" width="200px"><?=$notice[1]?></td>
						<td align="center"><?=$notice[2]?></td>
						
					</tr>
					<?php
							}
						}
						fclose($file);
					?>
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