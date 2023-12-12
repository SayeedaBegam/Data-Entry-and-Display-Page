<?php
	include 'conn.php';
	$id = $_GET['userid'];
	$sql = "Delete from user where md5(userid) = '$id'";
	if($conn->query($sql) === true){
		echo "Sucessfully deleted data";
		header('location:index.php');
	}else{
		echo "Oppps something error ";
	}
	$conn->close();
?>