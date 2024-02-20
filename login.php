<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if(isset($_POST['Signin'])) {
    // Query to check if the username and password match
    $sql ="SELECT * FROM `check` WHERE `username`='$_POST[username]' AND `password`='$_POST[password]'";
    $result = mysqli_query($conn,$sql);

    // If user is found, redirect to admin panel, otherwise display error message
    if (mysqli_num_rows($result) == 1) {
        // Set session variable to mark user as logged in
        session_start();
        $_SESSION['AdminLogId']=$_POST['username'];
        header("Location: admin_panel.php");
        exit();
    } else {
        echo"<script>
        alert('Incorrect username or password');
        </script>";
    }
}

$conn->close();
?>
