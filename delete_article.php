<?php
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
if (isset($_POST['ID'])) {
      $ID = $_POST['ID'];
      // SQL to delete article
      $sql = "DELETE FROM articles WHERE id=$ID";
      if ($conn->query($sql) === TRUE) {
          echo"<script>
          alert('Article deleted successfully');
          window.location.href='admin_panel.php';
          </script>";
      } else {
        echo"<script>
        alert('Error while deleting article');
        window.location.href='admin_panel.php';
        </script>";
      }
  }
  $conn->close();
  ?>