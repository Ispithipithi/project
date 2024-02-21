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
$title = $_POST['title'];
$content = $_POST['content'];
$ID= $_POST['ID'];
$link=$_POST['link'];
// Prepare and execute SQL statement to insert data into the database
$stmt = $conn->prepare("INSERT INTO articles (ID,title,content,link) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $ID,$title, $content,$link);

if ($stmt->execute() === TRUE) {
    echo"<script>
            alert('New article created successfully');
            window.location.href='admin_panel.php';
            </script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
