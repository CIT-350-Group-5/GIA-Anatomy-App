<?php


$servername = "mysql10.000webhost.com";
$dbusername = "a1267636_admin";
$dbpassword = "group5DB";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
//Pull email and password from form
$email=$_POST["email"];
$password = $_POST["password"];

// To protect SQL injection (
/*$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);*/
$query="SELECT * FROM a1267636_login.members WHERE email='$email' and password='$password'";
$result=mysqli_query($conn, $query);

// mysqli_num_rows is counting table row
$count= mysqli_num_rows($result);

//If result matched $email and $password, table row must be 1 row
if($count==1){
	// Register $email, $password and redirect to file "login_success.php"
	//session_register("email");
	//session_register("password"); 
	echo "success";
	//header("location: login_success.php");
}
else {
	echo "Wrong Username or Password";
}

//Close the connection
$conn->close();
?>