<?php
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Phonenumber = $_POST['Phonenumber'];

	// Database connection
	$conn = new mysqli('localhost','root','','accounts');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into information(Name , Email, Password, Phonenumber) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi",$Name, $Email, $Password, $Phonenumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thank you For Submitting..";
		$stmt->close();
		$conn->close();
	}
?>

