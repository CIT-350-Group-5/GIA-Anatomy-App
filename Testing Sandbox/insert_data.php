<?php
$email=$_POST["email"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$gender = $_POST["gender"];


if ($password1 == $password2){

	$servername = "mysql10.000webhost.com";
	$dbusername = "a1267636_admin";
	$dbpassword = "group5DB";

	// Create connection
	$conn = new mysqli($servername, $dbusername, $dbpassword);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$query = "INSERT INTO a1267636_login.members (email, password, fname, lname, age, gender)
			  VALUES ('$email','$password1','$fname','$lname','$age','$gender')";
			  
	if (mysqli_query($conn, $query)) {
    // Redirect browser 
		header( "Location: success.php?fname=$fname" );
	} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}

	//Close the connection
	$conn->close();
	
	// Redirect browser 
		header( "Refresh:5;url= login.php" );
		exit();
}
else{
	echo "Passwords do not match!";
	// Redirect browser 
	header("Location: register.php"); 
	exit();
}		  
?>