<?php 

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted

	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$first_name = $_POST['first_name'];
	$surname = $_POST['surname'];
	$city = $_POST['city'];
	$street = $_POST['street'];
	$zipcode = $_POST['zipcode'];
	$state = $_POST['state'];
	$title = $_POST['title'];
	$email = $_POST['email'];
	$qualification = $_POST['qualification'];
	$last_name = $_POST['last_name'];


	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
		//Save to database

		if ($password === $confirm_password) 
		{
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,confirm_password,first_name,surname,city,street,zipcode,state,title,qualification,email,last_name) values ('$user_id','$user_name','$password','$confirm_password','$first_name','$surname','$city','$street','$zipcode','$state','$title','$qualification','$email','$last_name')";

			mysqli_query($con, $query);
			header("Location: confirmation.php");
			die;
		}

		else

		{
			$message = "Passwords do not match";
			echo "<script type='text/javascript'> alert('$message'); </script>";


		}

	} 
	else
	{

		$message = "Please enter valid information";
		echo "<script type='text/javascript'> alert('$message'); </script>";
	}
}


?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>
<body id="body">

	<style type="text/css">

		#body{
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(img/background.jpg);
			background-size: cover;
			background-repeat: no-repeat;
		}

		#text{
			height:40px;
			border-radius:5px;
			padding: 10px;
			width: 100%;
			background:none;
			color:#fff;
			border:1px solid #fff;
			box-sizing: border-box;

		}

		#title{
			background: none;
			color: #fff;
			border: 1px solid #fff;
			height: 40px;
			border-radius: 5px;
			padding: 4px;
			border: 1px solid #fff;
			width: 100%;
			margin-bottom: 16px;

		}

		#button{
			
			width:100%;
			height: 40px;
			border-radius: 5px;
			color:#000000;
			background-color: lightblue;
			border:none;
			justify-content:center ;
			cursor: pointer;
			align-items: center;
		}

		#already{
			color:white;
			font-size:14px;
		}

		#box{
			background: rgba(49, 49, 49, .2);
			border: 1px solid rgba(255, 255, 255, .5);
			padding: 20px;
			box-sizing: border-box;
			width: 320px;
			display: flex;
			flex-direction: column;
			align-items: stretch;
		}

		#title #option{
			color: #000000;
		}

		#box-inputs{
			align-content: center;
			width:100%;
			justify-content: center;
		}
		#span{
			font-size: 12px;
			color: green;
		}
	</style>

	<div id="box">

		<form method="post">

			<div style="font-size:20px ; align-items:center; margin:10px; color: white;">Student Registration Portal</div>
			<div id="box-inputs">
			<select id="title" name="title" required>
				<option id="option" value="Mr">Mr.</option>
				<option id="option" value="Ms.">Ms.</option>
				<option id="option" value="Mrs">Mrs.</option>
				<option id="option" value="Miss">Miss</option>
				<option id="option" value="Dr">Dr.</option>
				<option id="option" value="prof">Prof.</option>
			</select>
			<input id="text" type="text" name="user_name" placeholder="Username" required> <br><br>
			<input id="text" type="text" name="first_name" placeholder="First name" required> <br><br>
			<input id="text" type="text" name="last_name" placeholder="last name" required> <br><br>
			<input id="text" type="text" name="surname" placeholder="Surname" required><br><br>
			<input id="text" type="text" name="street" placeholder="Street" required><br><br>
			<input id="text" type="text" name="city" placeholder="City" required><br><br>
			<input id="text" type="text" name="state" placeholder="State" required><br><br>
			<input id="text" type="text" name="zipcode" placeholder="Zip Code" required><br><br>
			<input id="text" type="email" name="email" placeholder="Email Address" required><br><br>
			<span id="span">Email must be unique</span>
			<input id="text" type="text" name="password" placeholder="Password" required><br><br>
			<input id="text" type="text" name="confirm_password" placeholder="Confirm Password" required><br><br>

			<select id="title" name="qualification" required>
				<option id="option" value="Bachelor_Degree">Bachelor's Degree</option>
				<option id="option" value="National_Diploma">National Diploma</option>
				<option id="option" value="Advanced_Diploma">Advanced Diploma</option>
				<option id="option" value="Matric">Grade 12</option>
			</select>

			<input id="button" type="submit" value="Signup"> <br><br>

			<a href="login.php" id="already">Already have account? Login</a> <br><br>
			</div>

		</form>
		
	</div>


</body>
</html>