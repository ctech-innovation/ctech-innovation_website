<?php 

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted

	$email = $_POST['email'];
	$password = $_POST['password'];

	if (!empty($email) && !empty($password) && !is_numeric($email)) {
		// code...
		//Read from database

		$query = "select * from users where email = '$email' limit 1";


		$result = mysqli_query($con, $query);

		if($result)		
		{
			if($result && mysqli_num_rows($result) > 0)
			{

			$user_data = mysqli_fetch_assoc($result);

			if ($user_data['password'] === $password)
			{

				$_SESSION['user_id'] = $user_data['user_id'];
				header("Location: dashboard.php");
				die;
			}


			}

		}

		$message = "Wrong username and password";
		echo "<script type='text/javascript'> alert('$message'); </script>";

	} else
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
	<title>Login</title>
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
			height: 30px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
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

		#inner-box{
			align-content: center;
			width:100%;
			justify-content: center;
		}

	</style>

	<div id="box">

		<form method="post">

			<div style="font-size:20px ; margin:10px; color: white;">Login</div>

			<div id="inner-box">
			<input id="text" type="email" name="email" placeholder="email"> <br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="button" type="submit" value="login"> <br><br>
			<a href="signup.php" id="already">Don't have account? Signup</a> <br><br>
			</div>

		</form>
		
	</div>


</body>
</html>