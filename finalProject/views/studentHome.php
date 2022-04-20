<?php 
	require_once('../controller/headerCookie.php');
?>

<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<!--Top Menu-->
	<?php echo file_get_contents("html/topMenuS.html"); ?>

	<section id="body">
		<?php echo file_get_contents("html/sideMenuS.html"); ?>
		<!---------------------------------------------------------------------------------------------------------------------------------------Content-------------------------------------------------------------------------------------------------------------------------------------------------->
		<div id="content">
			<div id="welcome">
				<h1> Welcome Back, <span><?=$_SESSION['uname']?></span></h1>
			</div>
			<div id="dashboard">
				<a href="studentHome.php" class="dashboard_menuBox1">
					<img src="img/icons8-home-100.png">
				</a>
				<a href="studentNotice.php" class="dashboard_menuBox2">
					<img src="img/icons8-notice-100.png">
				</a>
				<a href="gradingSystem.php" class="dashboard_menuBox3">
					<img src="img/grading.png">
				</a>
				<a href="teacherInfo.php" class="dashboard_menuBox4">
					<img src="img/icons8-users-100.png">
				</a>
				<a href="result.php" class="dashboard_menuBox5">
					<img src="img/result.jpg">
				</a>
				<a href="routine.php" class="dashboard_menuBox6">
					<img src="img/routine.png">
				</a>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>



