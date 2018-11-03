<?php

	session_start();
	include('function.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	if(isset($_GET['id'])){
		$file = $_GET['file'];
	}
	if(isset($_GET['id'])){
		$image = $_GET['image'];
	}
	
	
	try{
		$webapps =new Webapp;
		$sql = "DELETE FROM students WHERE id='$id'";
		$webapps->delete($sql);
		$_SESSION['message']="Delete Problem";
		header('location:view.php');

	}catch(exception $e){
		unlink('biography/'.$file);
		unlink('images/'.$image);
		$_SESSION['message']="Deleted Successfully";
		header('location:view.php');
	}

?>

