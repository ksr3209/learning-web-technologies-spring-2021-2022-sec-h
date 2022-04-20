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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src = js\currentdate.js"></script>
	<body style="background-color:powderblue;">
</head>
<body>
	<!--Top Menu-->
	<?php echo file_get_contents("html/topMenuS.html"); ?>

	<section id="body">
		<?php echo file_get_contents("html/sideMenuS.html"); ?>

	

<!-Homework -->
	<div id="content">
			
				<h2>Homework</h2>
				

					<fieldset>

					            <legend>Homework</legend>
					<form method="POST" action="../controller/homework.php">
					<tr>
								<td>Date</td>
								<td>
									<input type="date" name="date" value="">
								</td>
					
							
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
								<td><input type="text" name="detail" value=""></td>
							</tr>
					<legend>Upload PDF/IMG</legend>
					<form >
						File: <input type="file" name="myfile"> 	
						<input type="submit" name="submit" onclick="msg()" value="Upload">
						<script type="text/javascript">
							function msg() {
								alert("Homework submited");
							}
						</script>
					</form>
				</fieldset>
			</td>
			
	</table>

<!-- Footer -->	
	<?php echo file_get_contents("html/footer.html"); ?>
	
</body>
</html>