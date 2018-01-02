<!doctype html>
<html lang = "en-US">
<head>
	<title> Validate registered user </title>
	<meta charset = "UTF-8">
</head>
	<body>
		<!--page to verify user when signing in -->
		<?php
				$uemail = $_POST["inemail"];
				$upass  = $_POST["inpassword"];
				
					$con = mysqli_connect('localhost','root','');    //Establish connection
					if(!$con){
						echo "Connection not established.";
					}
					
					if(!mysqli_select_db($con,'hack')){
						echo "Databse not selected";                  //select database
					}
					$sql = "SELECT * FROM signup WHERE email = '$uemail' and password = '$upass' ";
					$result = mysqli_query($con,$sql) or die("could not connect".mysqli_error($con));
					
					//mysql_sql_num is counting table row
					$count = mysqli_num_rows($result);
					
					//if matched
					if($count == 1){
						header("refresh:0; url=userlog.php");
					}else{
						echo "Email or Password is invalid. Try again";
						header("refresh:2; url = signinup.php");
					}		
		?>
	</body>
</html>