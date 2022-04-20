<?php 
	require_once('../controller/headerCookie.php');
	$uname =  $_SESSION['uname'];
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
	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>

