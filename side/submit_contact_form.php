<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name= $_POST['name'];
$email = $_POST['email'];
$message= $_POST['message'];
// Prepare and execute SQL statement to insert data into the database
$stmt = $conn->prepare("INSERT INTO contact (name,email,message) VALUES (?,?,?)");
$stmt->bind_param("sss",$name,$email,$message);

if ($stmt->execute() === TRUE) {
    echo"<script>
            alert('Message submitted');
            window.location.href='contact.php';
            </script>";
} else {
    echo"<script>
            alert('Message couldn't be submitted');
            window.location.href='contact.php';
            </script>";
}

$stmt->close();
$conn->close();
?>