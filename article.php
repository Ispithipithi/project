<?php include("header.php"); 
?>
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

// Fetch articles from database
$sql = "SELECT title, content, link FROM articles";
$result = $conn->query($sql);

$articles = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Featured Articles</title>
<link rel="stylesheet" href="styles.css"> 
</head>
<body>
<h1>Featured Articles</h1>
<div class="container">
  <?php foreach ($articles as $article): ?>
  <div class="article">
    <h2><?php echo $article['title']; ?></h2>
    <p class="excerpt"><?php echo $article['content']; ?></p>
    <p class="read-more"><a href="<?php echo $article['link']; ?>" target="_blank">Read More</a></p>
  </div>
  <?php endforeach; ?>
</div>

</body>
</html>

