<?php 
	require_once('../controller/headerCookie.php');
	$uname =  $_SESSION['uname'];
?>

<html>
<head>
	<title>Users</title>
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
	<body style="background-color:powderblue;">
	
	<!-- Menu -->
	<table border="0" width="100%" height="100px">
		<tr>
			<td align="left">
				<img src="img/logo.png" width="100px" height="100px">
			</td>
			<td align="right">
				<h3>
					<a href="adminProfile.php">Profile</a> |
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
			<td width="10%"></td>
			<td width="70%">
				<table border="1" width="80%">
					
<!--Show Result--------------------------------------------------------------->
					<?php 
						$file = fopen('../model/studentresult.txt', 'r');
						while(!feof($file)){
							$f = fgets($file);
							if ($f!=null) {
								$res = explode('|', $f);
								if(trim($res[0])==$uname){
									$result=$res;

					?>
					<tr  height="100px">
						<td align="center"><b>Subject</b></td>
						<td align="center"><?=$res[1]?></td>
						<td align="center"><?=$res[3]?></td>
						<td align="center"><?=$res[5]?></td>
						<td align="center"><?=$res[7]?></td>
						<td align="center"><?=$res[9]?></td>
					</tr>
					<tr>
						<td align="center"><b>Result</b></td>
						<td align="center"><?=$res[2]?></td>
						<td align="center"><?=$res[4]?></td>
						<td align="center"><?=$res[6]?></td>
						<td align="center"><?=$res[8]?></td>
						<td align="center"><?=$res[10]?></td>
					</tr>
					<?php
								}
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
	<table border="2" width="100%" height="50px">
		<tr>
			<td colspan="2" align="center">
				Copyright ~ Web Technology, Section: H, Group: 3
			</td>
		</tr>
	</table>
	
</body>
</html>
