<?php 
	include('conn.php');
	if(isset($_POST['firstname'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$address=$_POST['address'];

		mysqli_query($conn,"insert into user (firstname, lastname, username, password, address) values ('$firstname', '$lastname', '$username', '$password', '$address')");
	}
?>