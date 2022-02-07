<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database_name = "lbtians_register";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if(!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
} 

if (isset($_POST['save'])) {
	$yourname = $_POST['yourname'];
	$crushname = $_POST['crushname'];
	$letter = $_POST['letter'];
	
	$sql_query = "INSERT INTO register(`yourname`, `crushname`, `letter`)
	VALUES ('$yourname', '$crushname', '$letter')";
	
	if (mysqli_query($conn, $sql_query)) {
		echo "Submitted Successfully!!!";
	} else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>