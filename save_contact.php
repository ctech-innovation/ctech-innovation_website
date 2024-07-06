<?php
// Database configuration
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "login_sample_db"; // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $message = $_POST['message'];

    // Prepare and bind
    
    $query = "INSERT INTO users (first_name,last_name) VALUE ('$first_name','$last_name')";

    mysqli_connect($conn, $query);
    header("Location..home.php");
    die;


}

?>
