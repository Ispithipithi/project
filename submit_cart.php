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
$phone = $_POST['phone'];
$address= $_POST['address'];
$id= $_POST['id'];
$item_name= $_POST['item_name'];
$item_price= $_POST['item_price'];
$quantity= $_POST['quantity'];
$total= $_POST['total'];
$gtotal= $_POST['gtotal'];
// Prepare and execute SQL statement to insert data into the database
$stmt = $conn->prepare("INSERT INTO cart(name,phone,address,id,item_name,item_price,quantity,total,gtotal) VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssss",$name,$phone,$address,$id,$item_name,$item_price,$quantity,$total,$gtotal);

if ($stmt->execute() === TRUE) {
    echo"<script>
            alert('Order successfully placed');
            window.location.href='index.php';
            </script>";
} else {
    echo"<script>
            alert('Order couldn't be placed');
            window.location.href='index.php';
            </script>";
}

$stmt->close();
$conn->close();
?>