<?php 

	$uerror = "";
	$username = "";

	if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['username'] == null){
			$uerror  = "invalid username...";
		}else{
			$username = $_REQUEST['username'];
		}
	}	

?>

<html>
<head>
	<title></title>
</head>
<body>

	<form method="" action="">
			<table align="left">
				<tr><td>Name: </td></tr>
				<tr>
					<td><input type="text" name="myname" value="" /> </td>
					
				</tr>
				<tr>
                     <td><input type="submit" name="submit" value="Submit"></td>
			    </tr>
</table>
</body>

</html>