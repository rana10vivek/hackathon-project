<!doctype html>
<html lang = "en-US">
<head>
	<title> PI data </title>
	<meta charset = "UTF-8">
</head>
<body>
		<?php
				$con = mysqli_connect('localhost','root','');
				if(!$con){
					echo "Connection not established!";
				}
				
				if(!mysqli_select_db($con,"hack")){
					echo "Database Nnot selected";
				}else{
					//fetch variables
					$dateofbirth = $_POST['DOB'];
					$city = $_POST['city'];
					$state= $_POST['state'];
					$qual = $_POST['qualification'];
					$coy = $_POST['coy'];
					$school = $_POST['schoolname'];
					$board = $_POST['board'];
					$stream= $_POST['stream'];
					$course= $_POST['course'];
					$typecourse= $_POST['coursetype'];
					
					//query for insertion
					$sql = "UPDATE signup SET DOB = '$dateofbirth',City = '$city',State = '$state', Qualification = '$qual',COY = '$coy',
							School = '$school',Board = '$board',Stream = '$stream',course = '$course',TypeCourse = '$typecourse' WHERE City = ''";					
					
					
					if(!mysqli_query($con,$sql)){
						echo " Unknown error";
					}else{
						echo "Data inserted successfully";
						header("refresh:2; url = signinup.php");
					}
				}
		?>
</body>
</html>
					
					