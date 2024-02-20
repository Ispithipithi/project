    <?php 
    session_start();
    if (!isset($_SESSION['AdminLogId']))
    {
        header("Location: admin_login.php");
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>WELCOME TO ADMIN PANEL</h1>

        <div class="container">

    <button class="show-add-article" onclick="toggleAddArticle()">Add New Article</button>

    <div class="add-article-section" id="add-article-section">
        <h2>Add New Article</h2>
        <form action="insert_article.php" method="post">
        <div class="form-group">
            <label for="ID">ID:</label>
            <input type="number" id="ID" name="ID" placeholder="Enter ID for the article" required>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter the title of your article" required>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="6" placeholder="Write your article content here" required></textarea>
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" id="link" name="link" placeholder="Enter the link of your article" required>
        </div>
        <button type="submit">Submit</button>
        </form>
    </div>



    <script>
    function toggleAddArticle() {
    var addArticleSection = document.getElementById("add-article-section");
    if (addArticleSection.style.display === "block") {
        addArticleSection.style.display = "none";
    } else {
        addArticleSection.style.display = "block";
    }
    }
    </script>
    <br>
    <button class="show-delete-article" onclick="toggleDeleteArticle()">Delete Article</button>
    <div class="delete-article-section" id="delete-article-section">
    <h2>Delete Your Article</h2>
    <form action="delete_article.php" method="post">
    <div class="form-group">
            <label for="ID">ID:</label>
            <input type="text" id="ID" name="ID" placeholder="Enter the ID of your article" required>
        </div>
        <button type="submit">Delete</button>
        </form>
    </div>
    
    <script>
        
    function toggleDeleteArticle() {
    var DeleteArticleSection = document.getElementById("delete-article-section");
    if (DeleteArticleSection.style.display === "block") {
        DeleteArticleSection.style.display = "none";
    } else {
        DeleteArticleSection.style.display = "block";
    }
    }
    </script>
    <br>
    <button class="show-contact" onclick="toggleContact()">User Contact Info</button>
    <div class="contact-section" id="contact-section">
    <h2>User Contact Info</h2>
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
  $sql = "SELECT *FROM contact";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<div class='contact-item'>";
          echo "<h3>" . $row['name'] . "</h3>";
          echo "<p>Email: <a href='mailto:" . $row['email'] . "' class='email'>" . $row['email'] . "</a></p>";
          echo "<p>Message: " . $row['message'] . "</p>";
          echo "</div>";
      }
  } else {
      echo "No contact information found";
  }

  $conn->close();
  ?>
  </div>



<script>
    
function toggleContact() {
  var ContactSection = document.getElementById("contact-section");
  if (ContactSection.style.display === "block") {
    ContactSection.style.display = "none";
  } else {
    ContactSection.style.display = "block";
  }
}
</script>
<br>
    <button class="show-order" onclick="toggleorder()">User Order List</button>
    <div class="order-section" id="order-section">
    <h2>Order List</h2>

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
      
      $sql = "SELECT * FROM cart";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // Output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr>";
              
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='3'>No purchase orders found</td></tr>";
      }

      $conn->close();
      ?>
      </div>
    </div>
      <script>
    function toggleOrder() {
      var OrderSection = document.getElementById("order-section");
      if (OrderSection.style.display === "block") {
        OrderSection.style.display = "none";
      } else {
        OrderSection.style.display = "block";
      }
    }
    </script>
</body>
</html>
