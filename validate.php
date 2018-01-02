<!doctype html>
<html lang = "en-US">
<head>
	<title>	Validation Page </title>
	<meta charset = "UTF-8">
</head>
<body>
	<?php
	
	//Database Connection
	$con = mysqli_connect('localhost','root',''); 
	
	if(!$con) //If connection unsuccessful
	{
		echo "Not Connected to server"; // print this
	}
	
	if(!mysqli_select_db($con,'hack'))// Database name or selection error
	{
		echo "Database not selected";
	}
	
	//Assignment
	$firstname = $_POST["firstname"]; 
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	
	//Insert Value to Database
	$sql = "INSERT INTO signup(fname,lname,email,mobile,password,gender) VALUES('$firstname','$lastname','$email','$mobile','$password','$gender')";
	
	//To Check if insertion is successful
	if(!mysqli_query($con,$sql))
	{
		echo "Not Inserted";
	}
	else
	{
		echo "<h1 align=center>You're successfully registered!!</h1>"; //Print it in redirected page- validate.php
	}
	header("refresh:1; url = signinup.php"); // after 3 seconds auto redirects back to siginup.php
?>
</body>
</html>