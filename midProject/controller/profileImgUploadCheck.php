<?php 
	require_once('../controller/headerCookie.php');
	
	if(isset($_POST['submit'])){
		$src = $_FILES['myfile']['tmp_name'];
		$des = '../viwes/img'.$_FILES['myfile']['name'];

		if(move_uploaded_file($src, $des)){
			header('location: ../views/studentHome.php');
		}else{
			echo "error";
		}
	}
?>