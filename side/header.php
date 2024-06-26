<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> Gadgets</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link"  href="index.php">Home</a>
         </li>
        <li class="nav-item active">
        <a class="nav-link"  href="product.php">Product</a>
        <li class="nav-item active">
          <a class="nav-link"  href="article.php">Articles</a>
        </li>
          </li>
          <li class="nav-item active">
          <a class="nav-link"  href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <?php
    $count=0;
    if(isset($_SESSION['cart']))
    {
      $count=count($_SESSION['cart']);
    }
    ?>
       <a href="mycart.php" class="btn btn-success">MY CART <?php echo $count; ?></a>
       
  </div>
  <a href="admin_login.php" class="btn btn-success"><ion-icon name="lock-closed-outline"></ion-icon></a>

</nav>

</body>
</html>