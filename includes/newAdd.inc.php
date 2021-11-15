<?php
	include_once 'conn.php';

	$emailAdd = $_POST['emailAdd'];
	

	$sql = "INSERT INTO userad (email) VALUES ('$emailAdd');";

	mysqli_query($conn, $sql);
   

	header("Location: ../buttons.php?subscribe=success");
?>