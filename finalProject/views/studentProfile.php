<?php 
	require_once('../controller/headerCookie.php');
?>

<html>
<head>
	<title>Student Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<!--Top Menu-->
	<?php echo file_get_contents("html/topMenuS.html"); ?>

	<section id="body">
		<?php echo file_get_contents("html/sideMenuS.html"); ?>
		<!---------------------------------------------------------------------------------------------------------------------------------------Content----------------------------------------------------------------------------------------------------------------------------------------------->
		<div id="content">
			<div id="profile">
				<h2>Student Profile Info</h2>
				<div id="profile_img">
					<img src="img/studentprofile.jpg">
				</div>
				<div id="profile_info">
					<table>
						<tr>
							<td>User Type:</td>
							<td><?=$_SESSION['utype']?></td>
						</tr>
						<tr>
							<td>Username:</td>
							<td><?=$_SESSION['uname']?></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><?=$_SESSION['upass']?></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><?=$_SESSION['uemail']?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>
