<?php 
	
	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if($username != null && $password != null){
		    if($username == $password){
		    	header('location: Dashboard.php');
		    } else {
		    	echo "Invalid user";
		    }
		}else{
			echo "null submission..";
		}
	}	
?>