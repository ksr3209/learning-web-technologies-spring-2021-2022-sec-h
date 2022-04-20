<?php 
	require_once('../controller/headerCookie.php');
?>

<html>
<head>
	<title>Information</title>
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
				<h2>Teachers info</h2>
				<div id="notice_table">
					<table>
						<tr>
							<th class="users_table_c1"> ID</th>
							<th class="users_table_c2">Name</th>
							<th class="users_table_c3">Subject </th>
							<th class="users_table_c4">Phone</th>
							<th class="users_table_c5">Email Address</th>
							<th class="users_table_c6">Date of birth</th>
							
							
						</tr>
	<!--Show from DB--------------------------------------------------------------->
						<?php 
							require('../model/userModel.php');
							$result = getAllteacher();

							if (mysqli_num_rows($result) > 0) {
							  while($row = mysqli_fetch_assoc($result)) {						  
						?>
						<tr>
						    <td class="users_table_c2"><?php echo $row["id"];?></td>
							<td class="users_table_c3"><?php echo $row["name"];?></td>
							<td class="users_table_c4"><?php echo $row["Course"];?></td>
							<td class="users_table_c5"><?php echo $row["phone"];?></td>
							<td class="users_table_c6"><?php echo $row["email"];?></td>
							<td class="users_table_c"><?php echo $row["dob"];?></td>

							
						</tr>
						<?php	
								}
                                 
							    } 
							else {
							  echo "0 results";
							}
						?>
					</table>
					
							}
					    }					  
					?>
				</div>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>

