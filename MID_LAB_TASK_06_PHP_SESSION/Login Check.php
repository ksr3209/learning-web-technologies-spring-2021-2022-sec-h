<?php 
	session_start();
	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
		    if($username == $password){
		    	$_SESSION['status'] ='true';
		    	//$status ="true";
		    	header('location: Registration.php');
		    } else {
		    	echo "Invalid user";
		    }
		}else{
			echo "null submission..";
		}
	}	
?>