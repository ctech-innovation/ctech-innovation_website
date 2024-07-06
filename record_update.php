<?php
// Include the database connection file

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data

    $user_id = 7;

        // Retrieve user ID and user_id from the session
        
        $user_id = $_SESSION['user_id'];

        //echo "User ID: " . htmlspecialchars($id) . "<br>";
        //echo "User User ID: " . htmlspecialchars($user_id) . "<br>";

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $surname = $_POST['surname'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $qualification = $_POST['qualification'];
    $title = $_POST['title'];


    // Update user data in the database
    try {
        $sql = "UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email, surname = :surname, street = :street, city = :city, state = :state, zipcode = :zipcode, qualification = :qualification, title = :title WHERE user_id = :user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':street', $street);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':zipcode', $zipcode);
        $stmt->bindParam(':qualification', $qualification);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

    } catch (PDOException $e) {
        echo "Error updating user: " . $e->getMessage();
    }

    // Close the database connection
    $pdo = null;
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

        #box #inner-box #button{
            width: 20px;
            height: 40px;
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
           
            align-items: center;
            text-align: center;
        }

        #inner-box #h2{
            color:#fff;
            font-size: 20px;
            align-items: center;
            justify-content: center;

        }
        #inner-box #p{
        color:#fff;
        font-size: 16px;
        }

           #box #inner-box #twobtn{
            display:flex;
            justify-content:center;
            align-items:center;
            align-content: center;
            height:40px;
            align-content:center;
            margin-left:36px;
            margin-right:36px;
        }

        #box #inner-box #twobtn #a{
            color: #000000;
            text-decoration: none;
            width: 100%;
            height:40px;
            border: 1px solid #fff;
            text-align: center;
            align-items: center;
            align-content: center;
            background-color: lightblue;
         }

    </style>

    <div id="box">

        <form method="post">

            <div id="inner-box">
                <h2 id="h2">Updates Successful</h2>
                <p id="p">You have successfully updated your details</p>

                    <div class="twobtn" id="twobtn">
                    <a id="a" href="dashboard.php">CONTINUE</a>
                    </div>

            </div>

        </form>
        
    </div>


</body>
</html>