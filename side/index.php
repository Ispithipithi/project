<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    ?>
    <div class="container mt-5">
        <div class="row">
             <div class ="col-lg-3">
                     <form action="manage.php" method="POST">
                      <div class="card">
                          <img src="images/iphone.jpg" >
                         <div class="card-body text-center">
                             <h5 class="card-title">iphone15</h5>
                             <p class="card-text">price RS.200000</p>
                             <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                             <input type="hidden" name="Item_Name" value="Iphone">
                             <input type="hidden" name="Price" value="200000">
                            </div>
                        </div>
                </form>
            </div>
            <div class ="col-lg-3">
                     <form action="manage.php" method="POST">
                      <div class="card">
                          <img src="images/mac.jpeg" >
                         <div class="card-body text-center">
                             <h5 class="card-title">MAC BOOK</h5>
                             <p class="card-text">150000</p>
                             <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                             <input type="hidden" name="Item_Name" value="MAC">
                             <input type="hidden" name="Price" value="150000">
                            </div>
                        </div>
                </form>
            </div>
            <div class ="col-lg-3">
                     <form action="manage.php" method="POST">
                      <div class="card">
                          <img src="images/samsung.jpg" >
                         <div class="card-body text-center">
                             <h5 class="card-title">Samsung</h5>
                             <p class="card-text">price RS.1000</p>
                             <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                             <input type="hidden" name="Item_Name" value="Samsung">
                             <input type="hidden" name="Price" value="1000">
                            </div>
                        </div>
                </form>
            </div>
            <div class ="col-lg-3">
                     <form action="manage.php" method="POST">
                      <div class="card">
                          <img src="images/MI.jpg" >
                         <div class="card-body text-center">
                             <h5 class="card-title">MI</h5>
                             <p class="card-text">price RS.10</p>
                             <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                             <input type="hidden" name="Item_Name" value="MI">
                             <input type="hidden" name="Price" value="10">
                            </div>
                        </div>
                </form>
            </div>
         </div>
     </div>
</body>
</html>