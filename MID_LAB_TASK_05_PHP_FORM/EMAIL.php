<?php 

	$uerror = "";
	$EMAIL = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST[''] == null){
			$uerror  = "invalid ...";
		}else{
			$EMAIL = $_REQUEST['EMAIL'];
		}
	}	

?>

<html>
<head>
	<title>Email</title>
</head>
<body>

	<form method="" action="">
			
			<table>
				<tr><td>Email: </td></tr>
				<tr>
					<td><input type="text" name="myEmail" value="" /> </td>	
					<td><img src="error.png" alt="error" width="20" height="25"></td>
				</tr>
				<tr>
                     <td><input type="submit" name="submit" value="Submit"></td>
			    </tr>
</table>
</body>

</html>