<?php 

	$uerror = "";
	$DOB = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['DOB'] == null){
			$uerror  = "invalid ...";
		}else{
			$DOB = $_REQUEST['DOB'];
		}
	}	

?>

<html>
<head>
	<title></title>
</head>
<body>

	<form method="" action="">
		<fieldset align="left">
			<legend>DATE OF BIRTH</legend>
			<table align="left">
				


				<tr>
					<td>DOB: </td>
					<td><input type="date" name="dob" value=""> </td>
				</tr>
				<tr>
                     <td><input type="submit" name="submit" value="Submit"></td>
			    </tr>

			</table>
			</fieldset>
	</form>
</body>
</html>
© 2022 GitHub, Inc.