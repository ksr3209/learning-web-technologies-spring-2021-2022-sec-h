<?php 
	require_once('../controller/headerCookie.php');
	require('../model/userModel.php');

	if(isset($_REQUEST['submit'])){
		$date = $_REQUEST['date'];
		$title = $_REQUEST['title'];
		$detail = $_REQUEST['detail'];

		if($date != null && $title != null && $detail != null){
			
			$status = addNotice($date, $title, $detail);

			if($status){
				header('location: ../views/studentHome.php');
			}else{
				header('location: ../views/homework.php');
			}

		}
		else{
			echo "NUll submission";;
		}
	}	
