<?php 
	require_once('../controller/headerCookie.php');
?>

<html>
<head>
	<title>Grade</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--Top Menu-->
	<?php echo file_get_contents("html/topMenuS.html"); ?>

	<section id="body">
		<?php echo file_get_contents("html/sideMenuS.html"); ?>
		<!---------------------------------------------------------------------------------------------------------------------------------------Content----------------------------------------------------------------------------------------------------------------------------------------------->
		<div id="content">
			<div id="notice">
				<h2>Result</h2>
				<div id="notice_table">
					<table>
						<tr>
							
							<th class="users_table_c2">Course</th>
							<th class="users_table_c3">Grade</th>
							<th class="users_table_c4">Number</th>
						</tr>
	<!--Show from DB--------------------------------------------------------------->
						<?php 
							require('../model/userModel.php');
							$res = getAllresult();

							if (mysqli_num_rows($res) > 0) {
							  while($row = mysqli_fetch_assoc($res)) {						  
						?>
						<tr>
							
							<td class="users_table_c2"><?php echo $row["Course"];?></td>
							<td class="users_table_c3"><?php echo $row["grade"];?></td>
							<td class="users_table_c4"><?php echo $row["Number"];?></td>
							
						</tr>
						<?php	
								}
							} 
							else {
							  echo "0 results";
							}
						?>
					</table>
										  
					?>
				</div>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>

